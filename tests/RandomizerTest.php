<?php

use ALttP\Randomizer;
use ALttP\Item;

/**
 * These test may have to be updated on any Logic change that adjusts the pooling of the RNG
 */
class RandomizerTest extends TestCase {
	public function setUp() {
		parent::setUp();
		$this->randomizer = new Randomizer('test_rules');
	}

	public function testGetSeedIsNullBeforeRandomization() {
		$this->assertNull($this->randomizer->getSeed());
	}

	public function testGetSeedIsNotNullAfterRandomization() {
		$this->randomizer->makeSeed();

		$this->assertNotNull($this->randomizer->getSeed());
	}

	/**
	 * @group RNG
	 * @group swords
	 */
	public function testSwordsRandomizedByConfig() {
		Config::set('alttp.test_rules.region.swordShuffle', true);

		$this->randomizer->makeSeed(1337);
		$this->assertEquals(Item::get('L4Sword'), $this->randomizer->getWorld()->getLocation("Alter")->getItem());
		$this->assertEquals(Item::get('L3Sword'), $this->randomizer->getWorld()->getLocation("Blacksmiths")->getItem());
		$this->assertEquals(Item::get('MasterSword'), $this->randomizer->getWorld()->getLocation("Pyramid")->getItem());
	}

	/**
	 * @group RNG
	 * @group swords
	 */
	public function testSwordsNotRandomizedByConfig() {
		Config::set('alttp.test_rules.region.swordShuffle', false);

		$this->randomizer->makeSeed(1337);
		$this->assertEquals(Item::get('L2Sword'), $this->randomizer->getWorld()->getLocation("Alter")->getItem());
		$this->assertEquals(Item::get('L3Sword'), $this->randomizer->getWorld()->getLocation("Blacksmiths")->getItem());
		$this->assertEquals(Item::get('L4Sword'), $this->randomizer->getWorld()->getLocation("Pyramid")->getItem());
	}

	/**
	 * @group RNG
	 * @group crystals
	 */
	public function testCrystalsRandomizedByConfigNoCrossWorld() {
		Config::set('alttp.test_rules.prize.crossWorld', false);
		Config::set('alttp.test_rules.prize.shuffleCrystals', true);

		$this->randomizer->makeSeed(1337);
		$this->assertEquals(Item::get('Crystal3'), $this->randomizer->getWorld()->getLocation("Palace of Darkness Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal5'), $this->randomizer->getWorld()->getLocation("Swamp Palace Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal7'), $this->randomizer->getWorld()->getLocation("Skull Woods Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal2'), $this->randomizer->getWorld()->getLocation("Thieves Town Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal6'), $this->randomizer->getWorld()->getLocation("Ice Palace Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal1'), $this->randomizer->getWorld()->getLocation("Misery Mire Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal4'), $this->randomizer->getWorld()->getLocation("Turtle Rock Crystal")->getItem());
	}

	/**
	 * @group RNG
	 * @group crystals
	 * @group pendants
	 */
	public function testCrystalsRandomizedByConfigCrossWorld() {
		Config::set('alttp.test_rules.prize.crossWorld', true);
		Config::set('alttp.test_rules.prize.shuffleCrystals', true);

		$this->randomizer->makeSeed(1337);
		$this->assertEquals(Item::get('Crystal3'), $this->randomizer->getWorld()->getLocation("Palace of Darkness Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal2'), $this->randomizer->getWorld()->getLocation("Swamp Palace Crystal")->getItem());
		$this->assertEquals(Item::get('PendantOfPower'), $this->randomizer->getWorld()->getLocation("Skull Woods Crystal")->getItem());
		$this->assertEquals(Item::get('PendantOfCourage'), $this->randomizer->getWorld()->getLocation("Thieves Town Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal6'), $this->randomizer->getWorld()->getLocation("Ice Palace Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal4'), $this->randomizer->getWorld()->getLocation("Misery Mire Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal5'), $this->randomizer->getWorld()->getLocation("Turtle Rock Crystal")->getItem());
	}

	/**
	 * @group RNG
	 * @group crystals
	 */
	public function testCrystalsNotRandomizedByConfigCrossWorld() {
		Config::set('alttp.test_rules.prize.crossWorld', true);
		Config::set('alttp.test_rules.prize.shuffleCrystals', false);

		$this->randomizer->makeSeed(1337);
		$this->assertEquals(Item::get('Crystal1'), $this->randomizer->getWorld()->getLocation("Palace of Darkness Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal2'), $this->randomizer->getWorld()->getLocation("Swamp Palace Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal3'), $this->randomizer->getWorld()->getLocation("Skull Woods Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal4'), $this->randomizer->getWorld()->getLocation("Thieves Town Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal5'), $this->randomizer->getWorld()->getLocation("Ice Palace Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal6'), $this->randomizer->getWorld()->getLocation("Misery Mire Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal7'), $this->randomizer->getWorld()->getLocation("Turtle Rock Crystal")->getItem());
	}

	/**
	 * @group RNG
	 * @group crystals
	 */
	public function testCrystalsNotRandomizedByConfigNoCrossWorld() {
		Config::set('alttp.test_rules.prize.crossWorld', false);
		Config::set('alttp.test_rules.prize.shuffleCrystals', false);

		$this->randomizer->makeSeed(1337);
		$this->assertEquals(Item::get('Crystal1'), $this->randomizer->getWorld()->getLocation("Palace of Darkness Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal2'), $this->randomizer->getWorld()->getLocation("Swamp Palace Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal3'), $this->randomizer->getWorld()->getLocation("Skull Woods Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal4'), $this->randomizer->getWorld()->getLocation("Thieves Town Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal5'), $this->randomizer->getWorld()->getLocation("Ice Palace Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal6'), $this->randomizer->getWorld()->getLocation("Misery Mire Crystal")->getItem());
		$this->assertEquals(Item::get('Crystal7'), $this->randomizer->getWorld()->getLocation("Turtle Rock Crystal")->getItem());
	}

	/**
	 * @group RNG
	 * @group pendants
	 */
	public function testPendantsRandomizedByConfigNoCrossWorld() {
		Config::set('alttp.test_rules.prize.crossWorld', false);
		Config::set('alttp.test_rules.prize.shufflePendants', true);

		$this->randomizer->makeSeed(1337);
		$this->assertEquals(Item::get('PendantOfWisdom'), $this->randomizer->getWorld()->getLocation("Eastern Palace Pendant")->getItem());
		$this->assertEquals(Item::get('PendantOfPower'), $this->randomizer->getWorld()->getLocation("Desert Palace Pendant")->getItem());
		$this->assertEquals(Item::get('PendantOfCourage'), $this->randomizer->getWorld()->getLocation("Tower of Hera Pendant")->getItem());
	}

	/**
	 * @group RNG
	 * @group crystals
	 * @group pendants
	 */
	public function testPendantsRandomizedByConfigCrossWorld() {
		Config::set('alttp.test_rules.prize.crossWorld', true);
		Config::set('alttp.test_rules.prize.shufflePendants', true);

		$this->randomizer->makeSeed(1337);
		$this->assertEquals(Item::get('PendantOfWisdom'), $this->randomizer->getWorld()->getLocation("Eastern Palace Pendant")->getItem());
		$this->assertEquals(Item::get('Crystal7'), $this->randomizer->getWorld()->getLocation("Desert Palace Pendant")->getItem());
		$this->assertEquals(Item::get('Crystal1'), $this->randomizer->getWorld()->getLocation("Tower of Hera Pendant")->getItem());
	}

	/**
	 * @group RNG
	 * @group pendants
	 */
	public function testPendantsNotRandomizedByConfigNoCrossWorld() {
		Config::set('alttp.test_rules.prize.crossWorld', false);
		Config::set('alttp.test_rules.prize.shufflePendants', false);

		$this->randomizer->makeSeed(1337);
		$this->assertEquals(Item::get('PendantOfCourage'), $this->randomizer->getWorld()->getLocation("Eastern Palace Pendant")->getItem());
		$this->assertEquals(Item::get('PendantOfPower'), $this->randomizer->getWorld()->getLocation("Desert Palace Pendant")->getItem());
		$this->assertEquals(Item::get('PendantOfWisdom'), $this->randomizer->getWorld()->getLocation("Tower of Hera Pendant")->getItem());
	}

	/**
	 * @group RNG
	 * @group pendants
	 */
	public function testPendantsNotRandomizedByConfigCrossWorld() {
		Config::set('alttp.test_rules.prize.crossWorld', true);
		Config::set('alttp.test_rules.prize.shufflePendants', false);

		$this->randomizer->makeSeed(1337);
		$this->assertEquals(Item::get('PendantOfCourage'), $this->randomizer->getWorld()->getLocation("Eastern Palace Pendant")->getItem());
		$this->assertEquals(Item::get('PendantOfPower'), $this->randomizer->getWorld()->getLocation("Desert Palace Pendant")->getItem());
		$this->assertEquals(Item::get('PendantOfWisdom'), $this->randomizer->getWorld()->getLocation("Tower of Hera Pendant")->getItem());
	}
}
