@extends('layouts.default')
<?php $disallow_disable_music = true; ?>

@include('_rom_info')
@include('_rom_loader')
@include('_rom_settings')
@include('_rom_spoiler')

@section('content')
@yield('loader')
<div class="col-md-6 handwritten prose">
	<p>
		Twas the night of the weekly, when all throughout Twitch,<br />
		Not a creature was stirring, not even the witch.<br />
		The boots were hung by the chimney with care,<br />
		In hopes that Sahasrahla soon would be there.<br />
	</p>
	<p>
		The soldiers were nestled, all snug in their beds,<br />
		While visions of Zelda danced in their heads,<br />
		And Uncle with his sword, and Link’s mail red,<br />
		Were trying to figure out who got the bed.<br />
	</p>

	<p>
		When out in the yard, a wind blew so cold,<br />
		Link dashed to the door, so brave and so bold,<br />
		Once outside the house, he slipped and fell down,<br />
		Climbing back to his feet, he gasped and he frowned.<br />
	</p>

	<p>
		“Hyrule’s all ice! It’s Ganon to blame!”<br />
		“With slippery physics, I can’t beat this game!”<br />
		“I still have to try, though my chances are slim,”<br />
		“But with the lakes frozen, I won't have to swim!”<br />
	</p>

	<p>
		In a brilliant flash, hearing Link’s cold mayday,<br />
		Came the top eight runners, on a miniature sleigh,<br />
		They beckoned him over, and while the ice was a pain,<br />
		Link hopped right aboard, and shouted their names!<br />
	</p>

	<p>
		“Now, CRANSOON! now, AA! now, CHRISTOS and BEN!”<br />
		“On, G3RD0! on KYONG! on, JSR and JEM!”<br />
		“To the top of Death Mountain! to the left side of Swamp!”<br />
		“Now race away! bonk away! dot done away all!"<br />
	</p>

	<p>
		With the talented runners, Link’s quest did embark,<br />
		He found all the items, in worlds light and dark,<br />
		It might have been tougher, calling for all wits,<br />
		Never once did our hero think of typing dot quit.<br />
	</p>

	<p>
		He beat Aga Two with the bug net for luck,<br />
		And chased after Ganon, with the loyal Swag Duck<br />,
		He fell down the hole, ready for Ganon’s tricks,<br />
		But even the silvers couldn’t prepare him for this.<br />
	</p>

	<p>
		“Ganon you fiend!” Link yelled at the boar,<br />
		“I’m sick of this ice; I can’t take any more!”<br />
		But Ganon just laughed as he turned out the lights,<br />
		One final surprise on this cold winter night.<br />
	</p>

	<p>
		I could tell you what happened in the pyramid that day,<br />
		But to see the surprise you’ll just have to play!<br />
		You’ll slip and you’ll slide, click that generate button,<br />
		And find out how winter makes Ganon more rotten!<br />
	</p>

	<p>
		In the end Link prevailed and raised the triforce,<br />
		Hyrule’s ice did melt, until the next seed, of course.<br />
		But I heard him exclaim as he drove out of sight,<br />
		HAPPY RANDO TO ALL, AND TO ALL A GOODNIGHT!<br />
	</p>
</div>
<div class="col-md-6">
<div id="seed-generate" class="panel panel-success" style="display:none">
	<div class="panel-heading panel-heading-btn">
		<h3 class="panel-title pull-left">Generate Item Randomizer Game (v8.{!! ALttP\Randomizer::LOGIC !!})</h3>
		<div class="btn-toolbar pull-right">
			@yield('rom-settings-button')
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12 pb-5">
				<div class="input-group" role="group">
					<span class="input-group-addon">Mode</span>
					<select id="mode" class="form-control selectpicker">
						<option value="standard">Standard</option>
						<option value="open">Open</option>
						<option value="swordless">Swordless</option>
					</select>
				</div>
			</div>
			<div class="col-md-12 pb-5">
				<div class="input-group" role="group">
					<span class="input-group-addon">Logic</span>
					<select id="logic" class="form-control selectpicker">
						<option value="NoMajorGlitches">No Glitches</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 pb-5">
				<div class="input-group" role="group">
					<span class="input-group-addon">Goal</span>
					<select id="goal" class="form-control selectpicker">
						<option value="ganon">Defeat Ganon</option>
						<option value="dungeons">All Dungeons</option>
						<option value="pedestal">Master Sword Pedestal</option>
						<option value="triforce-hunt">Triforce Pieces</option>
					</select>
				</div>
			</div>
			<div class="col-md-12 pb-5">
				<div class="input-group" role="group">
					<span class="input-group-addon">Difficulty</span>
					<select id="difficulty" class="form-control selectpicker">
						<option value="easy">Easy</option>
						<option value="normal">Normal</option>
						<option value="hard">Hard</option>
						<option value="expert">Expert</option>
						<option value="insane">Insane</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 pb-5">
				<div class="input-group" role="group">
					<span class="input-group-addon">Seed</span>
					<input type="text" id="seed" class="seed form-control" maxlength="9" placeholder="random">
					<span class="input-group-btn">
						<button id="seed-clear" class="btn btn-default" type="button"><span class="glyphicon glyphicon-remove"></span></button>
					</span>
				</div>
			</div>
			<div class="col-md-12 pb-5">
				<div class="input-group" role="group">
					<span class="input-group-addon">Variation</span>
					<select id="variation" class="form-control selectpicker">
						<option value="none">None</option>
						<option value="timed-race">Timed Race</option>
						<option value="timed-ohko">Timed OHKO</option>
						<option value="ohko">OHKO</option>
						<option value="triforce-hunt">Triforce Piece Hunt</option>
						<option value="key-sanity">Key-sanity</option>
					</select>
				</div>
			</div>
		</div>
		@yield('rom-settings')
	</div>
	<div class="panel-footer">
		<div class="row">
			<div class="col-md-6">
				<div class="btn-group btn-flex" role="group">
					<button class="btn btn-info" name="generate-tournament-rom">Generate Race ROM (no spoilers)</button>
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group btn-flex" role="group">
					<button name="generate" class="btn btn-success" disabled>Generate ROM</button>
					<button name="generate-save" class="btn btn-success" disabled><span class="glyphicon glyphicon-save"></span></button>
					<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
					</button>
					<ul id="generate-multi" class="dropdown-menu dropdown-menu-right">
						@for ($i = 1; $i <= 10; $i++)
						<li><a data-value="{{ $i }}">Generate {{ $i }} seeds</a></li>
						@endfor
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-md-6">
<div id="seed-details" class="info panel panel-info" style="display:none">
	<div class="panel-heading"><h3 class="panel-title">Game Details</h3></div>
	<div class="panel-body">
		@yield('rom-info')
		<div class="col-md-6">
			<div class="row">
				<button name="save-spoiler" class="btn btn-default" disabled>Save Spoiler</button>
				<button name="save" class="btn btn-success" disabled>Save Rom</button>
			</div>
		</div>
		@yield('rom-spoiler')
	</div>
</div>
</div>
<div class="col-md-6">
	<div class="handwritten prose">
		<p>A very special huge thanks to all the people who helped make this a reality, especially:<ul>
			<li>Zarby89</li>
			<li>Karkat</li>
			<li>Myramong</li>
			<li>Sosuke3</li>
			<li>walking_eye</li>
			<li>SmallHacker</li>
		</ul></p>
		<p class="pull-right">- Veetorp</p>
		<div class="clearfix"></div>
	</div>
</div>
<form id="config" style="display:none">
	<input type="hidden" name="logic" value="NoMajorGlitches" />
	<input type="hidden" name="difficulty" value="normal" />
	<input type="hidden" name="variation" value="none" />
	<input type="hidden" name="mode" value="standard" />
	<input type="hidden" name="goal" value="ganon" />
	<input type="hidden" name="heart_speed" value="half" />
	<input type="hidden" name="sram_trace" value="false" />
	<input type="hidden" name="menu_speed" value="normal" />
	<input type="hidden" name="debug" value="false" />
	<input type="hidden" name="tournament" value="false" />
	<input type="hidden" name="special" value="true" />
</form>

<script>
function applySeed(rom, seed, second_attempt) {
	if (rom.checkMD5() != current_rom_hash) {
		if (second_attempt) {
			$('#seed-generate, #seed-details, #config').hide();
			$('.alert .message').html('Could not reset ROM.');
			$('.alert').show();
			$('#rom-select').show();
			return new Promise(function(resolve, reject) {
				reject(rom);
			});
		}
		return resetRom()
			.then(function(rom) {
				return applySeed(rom, seed, true);
			});
	}
	return new Promise(function(resolve, reject) {
		$.post('/seed' + (seed ? '/' + seed : ''), getFormData($('form#config')), function(patch) {
			rom.parsePatch(patch.patch).then(getSprite($('#sprite-gfx').val())
			.then(rom.parseSprGfx)
			.then(rom.setHeartSpeed($('#heart-speed').val()))
			.then(rom.setFastMenu($('#generate-fast-menu').prop('checked')))
			.then(rom.setSramTrace($('#generate-sram-trace').prop('checked')))
			.then(function(rom) {
				resolve({rom: rom, patch: patch});
			}));
		}, 'json')
		.fail(reject);
	});
}

function getFormData($form){
	var unindexed_array = $form.serializeArray();
	var indexed_array = {};

	$.map(unindexed_array, function(n, i){
		indexed_array[n['name']] = n['value'];
	});

	return indexed_array;
}

function seedFailed(data) {
	$('button[name=generate]').html('Generate ROM').prop('disabled', false);
	$('button[name=generate-save]').prop('disabled', false);
	$('.alert .message').html('Failed Creating Seed :(');
	$('.alert').show().delay(2000).fadeOut("slow");
}

function seedApplied(data) {
	return new Promise(function(resolve, reject) {
		$('button[name=generate-tournament-rom]').html('Generate Race ROM (no spoilers)').prop('disabled', false);
		$('button[name=generate]').html('Generate').prop('disabled', false);
		$('button[name=generate-save]').prop('disabled', false);
		parseInfoFromPatch(data.patch);
		pasrseSpoilerToTabs(data.patch.spoiler);
		rom.logic = data.patch.logic;
		rom.goal = data.patch.spoiler.meta.goal;
		rom.build = data.patch.spoiler.meta.build;
		rom.mode = data.patch.spoiler.meta.mode;
		rom.difficulty = data.patch.difficulty;
		rom.variation = data.patch.spoiler.meta.variation;
		rom.seed = data.patch.seed;
		rom.spoiler = data.patch.spoiler;
		$('button[name=save], button[name=save-spoiler]').show().prop('disabled', false);
		resolve(rom);
	});
}

$(function() {
	$('button[name=save], button[name=save-spoiler]').hide();
	$('.spoiler').hide();
	$('.spoiler-tabed').hide();
	$('.spoiler-toggle').on('click', function() {
		$(this).next().animate({height: 'toggle'});
		if ($(this).find('span').hasClass('glyphicon-plus')) {
			$.get("/spoiler_click/" + rom.seed);
			$(this).find('span').removeClass('glyphicon-plus').addClass('glyphicon-minus');
		} else {
			$(this).find('span').removeClass('glyphicon-minus').addClass('glyphicon-plus');
		}
	});
	$('#difficulty').on('change', function() {
		$('.info').hide();
		$('input[name=difficulty]').val($(this).val());
		localforage.setItem('rom.difficulty', $(this).val());
	});
	localforage.getItem('rom.difficulty').then(function(value) {
		if (!value) {
			value = 'normal';
		}
		$('#difficulty').val(value);
		$('#difficulty').trigger('change');
	});

	$('#variation').on('change', function() {
		$('.info').hide();
		var variation = $(this).val();
		var goal = $('#goal').val();
		$('input[name=variation]').val(variation);
		localforage.setItem('rom.variation', variation);
		if (variation === 'triforce-hunt' && goal !== 'triforce-hunt') {
			$('#goal').val('triforce-hunt');
			$('#goal').trigger('change');
		} else if (variation !== 'triforce-hunt' && goal === 'triforce-hunt') {
			$('#goal').val('ganon');
			$('#goal').trigger('change');
		}
	});
	localforage.getItem('rom.variation').then(function(value) {
		if (!value) return;
		$('#variation').val(value);
		$('#variation').trigger('change');
	});

	$('button[name=save]').on('click', function() {
		return rom.save('ALttP - VT_' + rom.logic
			+ '_' + rom.difficulty
			+ '-' + rom.mode
			+ '-' + rom.goal
			+ (rom.variation == 'none' ? '' : '_' + rom.variation)
			+ '_' + rom.seed + '_special.sfc');
	});
	$('button[name=save-spoiler]').on('click', function() {
		$.get("/spoiler_click/" + rom.seed);
		return FileSaver.saveAs(new Blob([$('.spoiler-text pre').html()]), 'ALttP - VT_' + rom.logic
			+ '_' + rom.difficulty
			+ '-' + rom.mode
			+ '-' + rom.goal
			+ (rom.variation == 'none' ? '' : '_' + rom.variation)
			+ '_' + rom.seed + '_special.txt');
	});

	$('button[name=generate-save]').on('click', function() {
		applySeed(rom, $('#seed').val())
			.then(seedApplied, seedFailed)
			.then(function(rom) {
				return rom.save('ALttP - VT_' + rom.logic
					+ '_' + rom.difficulty
					+ '-' + rom.mode
					+ '-' + rom.goal
					+ (rom.variation == 'none' ? '' : '_' + rom.variation)
					+ '_' + rom.seed + '_special.sfc');
			});
	});

	$('button[name=generate]').on('click', function() {
		$('input[name=tournament]').val($('#generate-tournament').prop('checked'));
		$('button[name=generate]').html('Generating...').prop('disabled', true);
		$('button[name=generate-save], button[name=save], button[name=save-spoiler]').prop('disabled', true);
		applySeed(rom, $('#seed').val()).then(seedApplied, seedFailed);
	});

	$('button[name=generate-tournament-rom]').on('click', function() {
		$('input[name=tournament]').val(true);
		$('button[name=generate-tournament-rom]').html('Generating...').prop('disabled', true);
		$('button[name=generate]').html('Generating...').prop('disabled', true);
		$('button[name=generate-save], button[name=save], button[name=save-spoiler]').prop('disabled', true);
		applySeed(rom, $('#seed').val()).then(seedApplied, seedFailed);
	});

	$('#logic').on('change', function() {
		$('.info').hide();
		localforage.setItem('rom.logic', $(this).val());
		$('input[name=logic]').val($(this).val());
	});
	localforage.getItem('rom.logic').then(function(value) {
		if (value === null) return;
		$('#logic').val(value);
		$('#logic').trigger('change');
	});

	$('#mode').on('change', function() {
		$('.info').hide();
		localforage.setItem('rom.mode', $(this).val());
		$('input[name=mode]').val($(this).val());
	});
	localforage.getItem('rom.mode').then(function(value) {
		if (value === null) return;
		$('#mode').val(value);
		$('#mode').trigger('change');
	});

	$('#goal').on('change', function() {
		$('.info').hide();
		var goal = $(this).val();
		var variation = $('#variation').val();
		localforage.setItem('rom.goal', goal);
		$('input[name=goal]').val(goal);
		if (goal === 'triforce-hunt' && variation !== 'triforce-hunt') {
			$('#variation').val('triforce-hunt');
			$('#variation').trigger('change');
		} else if (goal !== 'triforce-hunt' && variation === 'triforce-hunt') {
			$('#variation').val('none');
			$('#variation').trigger('change');
		}
	});
	localforage.getItem('rom.goal').then(function(value) {
		if (value === null) return;
		$('#goal').val(value);
		$('#goal').trigger('change');
	});

	$('#seed-clear').on('click', function() {
		$('#seed').val('');
	});

	$('#generate-multi a').on('click', function() {
		var itters = $(this).data('value');
		var zip = new jszip();
		$('button[name=generate]').html('Generating...').prop('disabled', true);
		$('button[name=generate-save], button[name=save], button[name=save-spoiler]').prop('disabled', true);

		genToZip(zip, itters).then(function(zip) {
			zip.generateAsync({type: "blob", compression: "DEFLATE"})
			.then(function(content) {
				FileSaver.saveAs(content, "VT-alttp-roms.zip");
				$('button[name=generate]').html('Generate').prop('disabled', false);
				$('button[name=generate-save]').prop('disabled', false);
			});
		});

	});

	function genToZip(zip, left) {
		return new Promise(function(resolve, reject) {
			applySeed(rom, $('#seed').val()).then(function(data) {
				var buffer = data.rom.getArrayBuffer().slice(0);
				var fname = 'ALttP - VT_' + data.patch.logic
					+ '_' + data.patch.difficulty
					+ '-' + data.patch.spoiler.meta.mode
					+ '-' + data.patch.spoiler.meta.goal
					+ (data.patch.spoiler.meta.variation == 'none' ? '' : '_' + data.patch.spoiler.meta.variation)
					+ '_' + data.patch.seed
					+ '_special';
				zip.file(fname + '.sfc', buffer);
				zip.file('spoilers/' + fname + '.txt', new Blob([JSON.stringify(data.patch.spoiler, null, 4)]));
				if (left - 1 > 0) {
					genToZip(zip, left - 1).then(function() {
						resolve(zip);
					});
				} else {
					resolve(zip);
				}
			});
		});
	}
});
</script>
@overwrite