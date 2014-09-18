<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2014 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 *
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('l2')) {
	class l2 extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '0.1';
		protected $this_game		= 'l2';
		protected $types			= array('classes', 'races', 'roles', 'filters');
		protected $classes			= array();
		protected $races			= array();
		protected $factions			= array();
		protected $filters			= array();
		public $langs				= array('english');

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> false
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',		// Unknown
						1 	=> 'all',		// Dark Elf
						2 	=> 'all',		// Dwarf
						3 	=> 'all',		// Elf
						4 	=> 'all',		// Human
						5 	=> 'all',		// Kamael
						6 	=> 'all',		// Orc
					),
				),
			),
		);
		
		public $default_roles = array(
			1	=> array(2,3),
			2	=> array(4),
			3	=> array(1,2,5,6,7,8),
			4	=> array(2,6),
		);
		
		protected $class_colors = array(
			1	=> '#B5B171',
			2	=> '#608269',
			3	=> '#A6D1FB',
			4	=> '#E2B824',
			5	=> '#825F7F',
			6	=> '#E05102',
			7	=> '#FEFDFF',
			8	=> '#E23B30',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		public function profilefields(){
			$xml_fields = array(
				'classpath'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_class_path',
					'options'		=> array('Fighter' => 'uc_path_1', 'Soldier' => 'uc_path_2', 'Mystic' => 'uc_path_3', 'Rogue' => 'uc_path_4', 'Scout' => 'uc_path_5', 'Assassin' => 'uc_path_6', 'Warder' => 'uc_path_7', 'Cleric' => 'uc_path_8', 'Knight' => 'uc_path_9', 'Shaman' => 'uc_path_10', 'Oracle' => 'uc_path_11', 'Scavenger' => 'uc_path_12', 'Wizard' => 'uc_path_13', 'Warrior' => 'uc_path_14', 'Artisan' => 'uc_path_15', 'Raider' => 'uc_path_16', 'Monk' => 'uc_path_17', 'Trooper' => 'uc_path_18', 'Hawkeye' => 'uc_path_19', 'Silver Ranger' => 'uc_path_20', 'Phantom Ranger' => 'uc_path_21', 'Arbalester' => 'uc_path_22', 'Prophet' => 'uc_path_23', 'Sword Singer' => 'uc_path_24', 'Bladedancer' => 'uc_path_25', 'Overlord' => 'uc_path_26', 'Warcryer' => 'uc_path_27', 'Inspector' => 'uc_path_28', 'Bishop' => 'uc_path_29', 'Elder' => 'uc_path_30', 'Paladin' => 'uc_path_31', 'Dark Avenger' => 'uc_path_32', 'Temple Knight' => 'uc_path_33', 'Shillien Knight' => 'uc_path_34', 'Treasure Hunter' => 'uc_path_35', 'Plains Walker' => 'uc_path_36', 'Abyss Walker' => 'uc_path_37', 'Bounty Hunter' => 'uc_path_38', 'Warlock' => 'uc_path_39', 'Elemental Summoner' => 'uc_path_40', 'Phantom Summoner' => 'uc_path_41', 'Warlord' => 'uc_path_42', 'Gladiator' => 'uc_path_43', 'Warsmith' => 'uc_path_44', 'Destroyer' => 'uc_path_45', 'Tyrant' => 'uc_path_46', 'Berserker' => 'uc_path_47', 'Sorcerer' => 'uc_path_48', 'Necromancer' => 'uc_path_49', 'Spellsinger' => 'uc_path_50', 'Spellhowler' => 'uc_path_51', 'Soul Breaker' => 'uc_path_52', 'Sagitarrius' => 'uc_path_53', 'Moonlight Sentinel' => 'uc_path_54', 'Ghost Sentinel' => 'uc_path_55', 'Trickster' => 'uc_path_56', 'Hierophant' => 'uc_path_57', 'Sword Muse' => 'uc_path_58', 'Spectral Dancer' => 'uc_path_59', 'Dominator' => 'uc_path_60', 'Doom Cryer' => 'uc_path_61', 'Judicator' => 'uc_path_62', 'Cardinal' => 'uc_path_63', 'Eva&acute;s Saint' => 'uc_path_64', 'Shillien Saint' => 'uc_path_65', 'Phoenix Knight' => 'uc_path_66', 'Hell Knight' => 'uc_path_67', 'Eva&acute;s Templar' => 'uc_path_68', 'Shillien Templar' => 'uc_path_69', 'Adventurer' => 'uc_path_70', 'Wind Rider' => 'uc_path_71', 'Ghost Hunter' => 'uc_path_72', 'Fortune Seeker' => 'uc_path_73', 'Arcana Lord' => 'uc_path_74', 'Elemental Master' => 'uc_path_75', 'Spectral Master' => 'uc_path_76', 'Dreadnought' => 'uc_path_77', 'Duelist' => 'uc_path_78', 'Maestro' => 'uc_path_79', 'Titan' => 'uc_path_80', 'Grand Khavatari' => 'uc_path_81', 'Doombringer' => 'uc_path_82', 'Archmage' => 'uc_path_83', 'Soultaker' => 'uc_path_84', 'Mysic Muse' => 'uc_path_85', 'Storm Screamer' => 'uc_path_86', 'Soul Hound' => 'uc_path_87', 'Yul Archer' => 'uc_path_88', 'Iss Enchanter' => 'uc_path_89', 'Aeore Healer' => 'uc_path_90', 'Sigel Knight' => 'uc_path_91', 'Othell Rogue' => 'uc_path_92', 'Wynn Summoner' => 'uc_path_93', 'Tyrr Warrior' => 'uc_path_94', 'Feoh Wizard' => 'uc_path_95'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'gender'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_gender',
					'options'		=> array('Male' => 'uc_male', 'Female' => 'uc_female'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'guild'	=> array(
					'type'			=> 'text',
					'category'		=> 'character',
					'lang'			=> 'uc_guild',
					'size'			=> 32,
					'undeletable'	=> true,
				),
			);
			return $xml_fields;
		}

		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
			}
		}

		public function install($install=false){}
	}
}
?>