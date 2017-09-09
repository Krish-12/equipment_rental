-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2017 at 06:28 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `about_id` int(255) NOT NULL AUTO_INCREMENT,
  `header` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `header`, `body`) VALUES
(1, 'nice', '<p>ja khusi dekhe nao</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(255) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`) VALUES
(17, 'Audio & Visual Equipment', '9359AAEAAQAAAAAAAANaAAAAJGVmZmE2N2NhLTAxNGMtNDY1MC1hYWM0LTI2NTBiNDZiM2UwMA.jpg'),
(18, 'Electronic Test Equipment', '2868Electronic-Test-Equipment-Sales.jpg'),
(14, 'Computer Equipment', '1560t3.jpg'),
(19, 'Electrical Equipment', '7873Product-Type_20160115-152106.jpg'),
(20, 'Environmental Testing Equipment ', '2173sevengo.jpg'),
(21, 'Laboratory Equipment', '1003sri-durga-lab-equipment-supplies-car-street-mangalore-s0w4t.jpg'),
(22, 'Light Construction Equipment', '9338Compaction.jpg'),
(23, 'Material Handling Equipment', '2000Allproducts.jpg'),
(24, 'Oil Field Equipment', '6766oilfield1408656677.jpg'),
(25, 'Photography & Film Equipment', '8144bg21.jpg'),
(26, 'Power & HVAC Equipment', '1753Roscoe_0729.jpg'),
(27, 'Power Utility Equipment', '1500csm_Go-Tract-3000-Electric-Utility-002_gallery_widget_full_420be61bca.jpg'),
(28, 'Road & Work Zone Equipment', '679310things.jpg'),
(29, 'Safety Equipment', '6125safety.png'),
(30, 'Surveying Equipment', '2141db_file_img_1593_799xauto.jpg'),
(31, 'Telecom & Fiber Optic Equipment', '6246Optical_Fiber_Cable_Slide.jpg'),
(32, 'Welding Equipment', '4954welder.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'hello@gmail.com'),
(2, 'indra@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(255) NOT NULL AUTO_INCREMENT,
  `service_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `order_type` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `service_id`, `price`, `quantity`, `total`, `payment_method`, `fname`, `lname`, `phone`, `email`, `country`, `state`, `town`, `zip`, `address`, `status`, `order_type`) VALUES
(4, 'kichu ', '200', '4', '800', '', 'roni', 'mondal', '1097', 'roni@gmail.com', 'india', 'west bengal', 'sainthia', '731234', 'punur, deriapur,', 'accepted', ''),
(3, 'something', '100', '3', '300', '', 'krish', 'mondal', '123', 'krish@gmail.com', 'india', 'west bengal', 'sainthia', '731234', 'punur, deriapur', 'pending', ''),
(5, '13', '125', '1', '375', 'cod', 'abc', 'def', '123', 'd@gmail.com', 'scasfcweaf', 'cewcwaec', 'ceewacw', '5737453', 'dfvwefw', 'pending', '18'),
(6, '13', '125', '1', '125', 'card', 'esfweafa', 'fceaf', '5424524', 'indra@gmail.com', 'asfcwef', 'wefewf', 'fwefewf', '572753', 'efwfewfw', 'pending', 'guest'),
(7, '14', '200', '2', '200', 'card', 'indra', 'jit', '7557012578', 'indrajitghosh707@gmail.com', 'india', 'w.b', 'kolkata', '700122', 'barrackpore', 'pending', 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `service_id` int(255) NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) NOT NULL,
  `sub_cat_id` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `category_id`, `sub_cat_id`, `service_name`, `description`, `price`, `status`) VALUES
(8, '17', '14', 'Sony BRAVIA 52" LCD TV Rental', 'For consumers who want an HDTV that keeps pace with fast-action movies, sports, and game play, Sony BRAVIA V-Series Flat Panel HDTVs combine Full HD 1080p performance and Motionflow 120Hz technology for an amazing viewing experience. Motionflow 120Hz takes both high-definition and standard programming a step further by increasing sharpness and detail in fast-moving images for more fluid, natural motion. In addition, BRAVIA V-Series HDTVs use proprietary Image Blur Reduction technology to further enhance the picture for even better performance.', '50', 'active'),
(11, '17', '19', 'Epson EX6220 LCD Projector Rental', 'The EX Series ensures compelling presentations. The EX6220 features the ultimate in widescreen HD performance. With convenient HDMI connectivity, the EX6220 projector delivers digital video and audio with just one cable. Plus, Epson''s Simple Setup Suite, a host of innovative features, enables flexible positioning and rapid setup in any venue. It''s the perfect solution for professionals whose presentations demand proven performance.', '150', 'active'),
(12, '17', '19', 'Infocus IN119HDX 3000 Lumens DLP Projector ', 'Full HD (1920 x 1080) resolution and 3000 lumens\r\nHD Spatial Resolution Technology beams beautifully-detailed images with accurate and vivid color reproduction\r\nConnectivity: HDMI 1.4; VGA x 2; composite video; S-video; 3.5mm stereo in x 2; 3.5mm stereo out; VGA monitor out; RS232C\r\nThrow ratio: 1.15 - 1.5; Contrast ratio: 15,000:1; Up to 10,000 lamp hours\r\nNo scaling or image resizing-native 1920 x 1080 resolution matches monitors, notebooks, and large format LCD panels', '150', 'active'),
(14, '17', '14', 'Samsung 108cm (43 inch) Full HD LED TV  (43K5002)', 'A nail-biting game of football or an interesting session of cookery show - no matter what you want to watch, with the Samsung FHD TV, you can watch TV in life-like clarity as it delivers breathtakingly real viewing experience, thanks to its 1920x1080 resolution.', '100', 'active'),
(13, '17', '19', 'Sanyo PLC-XU105 4500 Lumen Projector', 'XGA (1024 x 768)\r\n4500 ANSI Lumens\r\n7.7 lbs (3.5kg)', '125', 'active'),
(15, '17', '14', 'Panasonic TH-24D400DX 24 Inches HD LED TV', '60 Cntimerters LED 1366x768(HD)\r\nConnectivity Input: USB - 1, HDMI - 1\r\nNoise Reduction: Dot Noise Reduction; Picture Mode: Dynamic/Standard/Mild/User\r\nPower Supply: AC 100V-240V 50/60Hz, Standby Power Consumption 0.5W', '60', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `service_image`
--

CREATE TABLE IF NOT EXISTS `service_image` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `service_id` varchar(255) NOT NULL,
  `service_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `service_image`
--

INSERT INTO `service_image` (`id`, `service_id`, `service_image`) VALUES
(35, '15', '8336615PvEef+sL._SX355_.jpg'),
(34, '14', '5811samsung-43k5002-original-imaes2hv5k52hfwu.jpeg'),
(33, '13', '5587Sanyo-PLC-XU105-1.jpg'),
(32, '12', '3156InFocus-IN119HDX-Front-Top.jpg'),
(31, '11', '362896Wx96H.jpg'),
(30, '10', '9664230519355.jpg'),
(29, '9', '9082149123_hr.jpg'),
(28, '8', '1035sony-kd43xe8005-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_category_id` int(255) NOT NULL AUTO_INCREMENT,
  `sub_category_name` varchar(255) NOT NULL,
  `sub_category_image` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  PRIMARY KEY (`sub_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `sub_category_name`, `sub_category_image`, `category_id`) VALUES
(27, 'Spectrum Analyzers', '204spectrum-analyzer-ms2720t-front.png', '18'),
(14, 'Displays', '2698Kings-House-Equipment-15-1.jpg', '17'),
(26, 'Signal Generators', '9962a955a3de9afa2794fbaf8cc2473586cb_M.jpg', '18'),
(19, 'Projectors', '3795DSCN29332.jpg', '17'),
(20, 'Sound System', '5318Live Package 1.jpg', '17'),
(21, 'Video Cameras', '5725F55-transparent1.png', '17'),
(22, 'Laptops', '5575surfacepro3_2.png', '14'),
(23, 'Printers', '11130000047_printers-multifunction_450.png', '14'),
(24, 'Tablets', '2105tabletsmartphone.jpg', '14'),
(25, 'Oscilloscopes', '1103GW-Instek-GDS-3504.jpg', '18'),
(28, 'Cable Locators ', '3605210.jpg', '19'),
(29, 'Pipe & Cable Installation', '3954product-image-M-Pact-Install.png', '19'),
(30, 'Power Quality Analyzers', '8357TE30-Three-Phase-Working-Standard-and-Power-Quality-Analyzer.jpg', '19'),
(31, 'Thermal Imaging Cameras', '49210000444_testo-882-thermal-imaging-camera.jpeg', '20'),
(32, 'XRF Analysers ', '7344Niton-XRF-Analyzer_01.jpg', '20'),
(33, 'Centrifuges', '7083Eppendorf-5804_Multipurpose-Centrifuge-open.jpg', '21'),
(34, 'Freezers', '9621230519355.jpg', '21'),
(35, 'Fume Hoods', '5736nu-164-400-right.jpg', '21'),
(36, 'Mass Spectrometers', '585SHT4000.jpg', '21'),
(37, 'Boom Lifts', '6625boom-parent.jpg', '22'),
(38, 'Generators', '192715f014c6-620d-4f95-95ff-ca255378fb4b_1000.jpg', '22'),
(39, 'Light Towers', '1680LSC.jpg_Interflow - JPG - Fit to Box_600_500_true.jpg', '22'),
(40, 'Scissor Lifts', '8346download (2).jpg', '22'),
(41, 'Hydraulic Toe Jacks', '8699149123_hr.jpg', '23'),
(42, 'Portable Gantry Cranes', '3166Static-Gantry-Crane.jpg', '23'),
(43, 'Warehouse Forklifts', '363680V_Electric_Pneumatic_Forklift.png', '23'),
(44, 'Mud Buckets', '6160mud_bucket.png', '24'),
(45, 'Rig Vacs', '6371curry_supply_rig_vac__large.jpg', '24'),
(46, 'Screen Washers', '5765IMAGE06.jpg', '24'),
(47, 'Cameras', '1685amzcnt63lk_notripod.jpg', '25'),
(48, 'Grip/Lighting', '8906lighting-grip.png', '25'),
(49, 'VTRs & Decks', '2916pdw-f1600.jpg', '25'),
(50, 'Air Conditioners', '8192ac2.png', '26'),
(51, 'Heaters', '6778images (1).jpg', '26'),
(52, 'Uninterruptible Power Supply (UPS) ', '2048ups.png', '26'),
(53, 'Aerial Trucks', '9498361.343112528.JPG', '27'),
(54, 'Cable Lasher', '6267GMP-10500-G-LASHER-2T.jpg', '27'),
(55, 'Cable Reel Trailers', '9928cable-reel-trailers.jpg', '27'),
(56, 'Arrow Boards', '3979arrowbaord.jpg', '28'),
(57, 'Speed Radar Trailers', '3953wancosign.jpg', '28'),
(58, 'Traffic Cones', '3960traffic-cones-isolated.jpg', '28'),
(59, 'Fall Protection', '9144Miller_Turbo-pic.jpg', '29'),
(60, 'Portable Eyewash', '6914S90320-down_hr.jpg', '29'),
(61, 'Respiratory', '3726r57794.jpg', '29'),
(62, 'Self Contained Breather Apparatus (SCBA)', '1508Self-contained-breathing-apparatus.jpg', '29'),
(63, '3D Laser Scanners', '9093FARO.jpg', '30'),
(64, 'GPS/GNSS & Accessories', '3259promark100-base_1285156795277.jpg', '30'),
(65, 'Fusion Splicers', '279662S.jpg', '31'),
(66, 'LAN & Cable Testers', '3203network-cable-tester.jpg', '31'),
(67, 'OTDRs', '1957M310_TruEvent-1.jpg', '31'),
(68, 'MIG Welders', '8524Millermatic 350P.jpg', '32'),
(69, 'Stick Welders', '1766spin_prod_207537701.jpg', '32'),
(70, 'TIG Welders', '7425tigweld_200sx_thumb_adjust.jpg', '32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` enum('active','inactive','pending') NOT NULL,
  `user_type` enum('admin','supplier','rental') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `email`, `password`, `category`, `status`, `user_type`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', 'active', 'admin'),
(5, 'roni', 'mon', '123456', 'roni@gmail.com', '123', 'supplier', 'active', 'supplier'),
(14, 'krish', 'roy', '123', 'r@gmail.com', '123', 'supplier', 'active', 'supplier'),
(10, 'bal', 'bal', '12344', 'bal@gmail.com', 'bal', 'supplier', 'inactive', 'supplier'),
(15, 'roy', 'roy', '12345', 'roy@gmail.com', 'roy', 'supplier', 'inactive', 'supplier'),
(16, 'z', 'n', '123', 'z@gmail.com', 'aaa', 'supplier', 'pending', 'supplier'),
(18, 'abc', 'def', '123', 'd@gmail.com', '123', 'rental', 'active', 'rental');
