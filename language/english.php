<?php
/*	Project:	EQdkp-Plus
 *	Package:	Lineage II game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Archer',
		2	=> 'Enchanter',
		3	=> 'Healer',
		4	=> 'Knight',
		5	=> 'Rogue',
		6	=> 'Summoner',
		7	=> 'Warrior',
		8	=> 'Wizard',

	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Dark Elf',
		2	=> 'Dwarf',
		3	=> 'Elf',
		4	=> 'Human',
		5	=> 'Kamael',
		6	=> 'Orc',
	),

	'roles' => array(
		1	=> 'Healer',
		2	=> 'Tank',
		3	=> 'Damage Dealer',
		4	=> 'Supporter',
	),
	'lang' => array(
		'l2'							=> 'Lineage II',
		'plate'							=> 'Plate',
		'heavy'							=> 'Heavy',
		'light'							=> 'Cloth',
		'medium'						=> 'Leather',

		// Profile information
		'uc_gender'						=> 'Gender',
		'uc_male'						=> 'Male',
		'uc_female'						=> 'Female',
		'uc_guild'						=> 'Guild',
		'uc_class_path'					=> 'Class Path',
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Class',
		'uc_level'						=> 'Level',

		// Class Path
		'uc_path_1' => 'Fighter',
		'uc_path_2' => 'Soldier',
		'uc_path_3' => 'Mystic',
		'uc_path_4' => 'Rogue',
		'uc_path_5' => 'Scout',
		'uc_path_6' => 'Assassin',
		'uc_path_7' => 'Warder',
		'uc_path_8' => 'Cleric',
		'uc_path_9' => 'Knight',
		'uc_path_10' => 'Shaman',
		'uc_path_11' => 'Oracle',
		'uc_path_12' => 'Scavenger',
		'uc_path_13' => 'Wizard',
		'uc_path_14' => 'Warrior',
		'uc_path_15' => 'Artisan',
		'uc_path_16' => 'Raider',
		'uc_path_17' => 'Monk',
		'uc_path_18' => 'Trooper',
		'uc_path_19' => 'Hawkeye',
		'uc_path_20' => 'Silver Ranger',
		'uc_path_21' => 'Phantom Ranger',
		'uc_path_22' => 'Arbalester',
		'uc_path_23' => 'Prophet',
		'uc_path_24' => 'Sword Singer',
		'uc_path_25' => 'Bladedancer',
		'uc_path_26' => 'Overlord',
		'uc_path_27' => 'Warcryer',
		'uc_path_28' => 'Inspector',
		'uc_path_29' => 'Bishop',
		'uc_path_30' => 'Elder',
		'uc_path_31' => 'Paladin',
		'uc_path_32' => 'Dark Avenger',
		'uc_path_33' => 'Temple Knight',
		'uc_path_34' => 'Shillien Knight',
		'uc_path_35' => 'Treasure Hunter',
		'uc_path_36' => 'Plains Walker',
		'uc_path_37' => 'Abyss Walker',
		'uc_path_38' => 'Bounty Hunter',
		'uc_path_39' => 'Warlock',
		'uc_path_40' => 'Elemental Summoner',
		'uc_path_41' => 'Phantom Summoner',
		'uc_path_42' => 'Warlord',
		'uc_path_43' => 'Gladiator',
		'uc_path_44' => 'Warsmith',
		'uc_path_45' => 'Destroyer',
		'uc_path_46' => 'Tyrant',
		'uc_path_47' => 'Berserker',
		'uc_path_48' => 'Sorcerer',
		'uc_path_49' => 'Necromancer',
		'uc_path_50' => 'Spellsinger',
		'uc_path_51' => 'Spellhowler',
		'uc_path_52' => 'Soul Breaker',
		'uc_path_53' => 'Sagitarrius',
		'uc_path_54' => 'Moonlight Sentinel',
		'uc_path_55' => 'Ghost Sentinel',
		'uc_path_56' => 'Trickster',
		'uc_path_57' => 'Hierophant',
		'uc_path_58' => 'Sword Muse',
		'uc_path_59' => 'Spectral Dancer',
		'uc_path_60' => 'Dominator',
		'uc_path_61' => 'Doom Cryer',
		'uc_path_62' => 'Judicator',
		'uc_path_63' => 'Cardinal',
		'uc_path_64' => 'Eva&acute;s Saint',
		'uc_path_65' => 'Shillien Saint',
		'uc_path_66' => 'Phoenix Knight',
		'uc_path_67' => 'Hell Knight',
		'uc_path_68' => 'Eva&acute;s Templar',
		'uc_path_69' => 'Shillien Templar',
		'uc_path_70' => 'Adventurer',
		'uc_path_71' => 'Wind Rider',
		'uc_path_72' => 'Ghost Hunter',
		'uc_path_73' => 'Fortune Seeker',
		'uc_path_74' => 'Arcana Lord',
		'uc_path_75' => 'Elemental Master',
		'uc_path_76' => 'Spectral Master',
		'uc_path_77' => 'Dreadnought',
		'uc_path_78' => 'Duelist',
		'uc_path_79' => 'Maestro',
		'uc_path_80' => 'Titan',
		'uc_path_81' => 'Grand Khavatari',
		'uc_path_82' => 'Doombringer',
		'uc_path_83' => 'Archmage',
		'uc_path_84' => 'Soultaker',
		'uc_path_85' => 'Mysic Muse',
		'uc_path_86' => 'Storm Screamer',
		'uc_path_87' => 'Soul Hound',
		'uc_path_88' => 'Yul Archer',
		'uc_path_89' => 'Iss Enchanter',
		'uc_path_90' => 'Aeore Healer',
		'uc_path_91' => 'Sigel Knight',
		'uc_path_92' => 'Othell Rogue',
		'uc_path_93' => 'Wynn Summoner',
		'uc_path_94' => 'Tyrr Warrior',
		'uc_path_95' => 'Feoh Wizard',
	),
);
?>
