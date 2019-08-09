-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2018 at 06:03 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_deals`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `City` varchar(100) NOT NULL,
  `ImgCity` varchar(1000) NOT NULL,
  PRIMARY KEY (`City`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City`, `ImgCity`) VALUES
('Ahmedabad', 'A1.jpg'),
('Mumbai', 'M1.jpg'),
('Chandigarh', 'C1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `Hotel_ID` varchar(5) NOT NULL,
  `WIFI` varchar(1) NOT NULL,
  `SPA` varchar(1) NOT NULL,
  `POOL` varchar(1) NOT NULL,
  `AC` varchar(1) NOT NULL,
  `WebsiteLink` varchar(1000) NOT NULL,
  `Img1` varchar(50) NOT NULL,
  `Img2` varchar(50) NOT NULL,
  `Deal1` varchar(100) NOT NULL,
  `Deal2` varchar(100) NOT NULL,
  `Deal3` varchar(100) NOT NULL,
  `About` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`Hotel_ID`, `WIFI`, `SPA`, `POOL`, `AC`, `WebsiteLink`, `Img1`, `Img2`, `Deal1`, `Deal2`, `Deal3`, `About`) VALUES
('A01', 'Y', 'Y', 'Y', 'N', 'https://www.marriott.com/hotels/travel/amdcy-courtyard-ahmedabad/', 'A1a.jpg', 'A1b.jpg', 'A1H1.jpg', 'A1H2.jpg', 'A1H3.jpg', 'Relaxed luxury awaits you at Courtyard Ahmedabad. Our 5-star hotel benefits from a great location in Gujarat\'s commercial capital, near SG Highway. Settle in to your well-designed accommodation, and take advantage of amenities including high-speed internet and 24-hour room service. Elegant marble bathrooms feature lighted makeup mirrors and plush robes and slippers; luxury pillowtop bedding encourages restful sleep after a busy day in Ahmedabad. Elsewhere throughout the hotel, we offer an array of restaurant options, including fine dining at Bayleaf as well as a 24-hour coffee bar, Java+. Pay a visit to our retail liquor store, B&W, work out in the modern fitness center or enjoy a swim in the outdoor pool. Those planning events in Ahmedabad will be impressed with our sophisticated venues, including the breathtaking Alishan ballroom, with high ceilings and capacity for 600. And our convenient location makes exploring the area a breeze. We know you\'re going to love your stay at the 5-star Courtyard Ahmedabad.'),
('A02', 'Y', 'Y', 'Y', 'Y', 'http://clubo7.com/', 'A2a.jpg', 'A2b.jpg', 'A2H1.jpg', 'A2H2.jpg', 'A2H3.jpg', 'Welcome to Club O7, your ultimate destination to enjoy, rejuvenate and grab your slice of life. Club O7 is the largest city club in Gujarat spread across lush ample acres of land in a perfect strategic locale, enchanting you into a world of supreme joy and splendid beauty soothing your body and soul. Presenting you a world free of pollution, stress, heck n deck of this mechanical life and Club O7 introduces you to a life kings size. Club O7 extends an opportunity to explore your style quotient and providing surplus fascinating avenues to rediscover your own self.\r\n'),
('A03', 'Y', 'N', 'Y', 'N', 'https://www.subahotels.com/hotel/suba-star/', 'A3a.jpg', 'A3b.jpg', 'A3H1.jpg', 'A3H2.jpg', 'A3H3.jpg', 'Hotel Suba Star welcomes you to experience top class luxury at affordable prices. It is located in the heart of Ahmedabad Judges Bungalow Road, less than 5 minutes from the major corporate sector offices and 15 minutes away from SEZ & CG Road situated in and around Ahmedabad. With its smart rooms and fine hospitality services it is a perfect choice for those who want to escape the hustle and bustle of the city and yet be amidst it. The hotel offers 36 furnished rooms, a fitness centre, a business centre and sophisticated banquet facilities.'),
('A04', 'Y', 'Y', 'Y', 'Y', 'https://www.hyatt.com/en-US/hotel/india/hyatt-ahmedabad/amdhy?src=pfxswain_sem_google_amdhy_rooms_in_eng_brand_exact_amdhy_brand-name_hyatt%20ahmedabad&mckv=s3oCsViRy-dc_pcrid_260655151348_mtid_529dkt13792&gclid=EAIaIQobChMIuNbD2bXR3gIVlxOPCh2tBQ8GEAAYASAAEgJPnvD_BwE', 'A4a.jpg', 'A4b.jpg', 'A4H1.jpg', 'A4H2.jpg', 'A4H3.jpg', 'Located in the heart of Gujarat’s Business Capital, Hyatt Ahmedabad is one of the finest luxury five star Hotel in Ahmedabad. The hotel offers a spectacular view of the Vastrapur Lake and the cityscape,next to the city\'s biggest mall-Ahmedabad One Mall and is the most ideal destination for both Business & Leisure.Modern and contemporary in design and ambience, the suites and guestrooms offer city, lake and poolside views and are carefully designed to take the inconvenience out of  business travel.'),
('A05', 'Y', 'N', 'N', 'N', 'https://www.lemontreehotels.com/lemon-tree-hotel/ahmedabad/hotel-ahmedabad.aspx', 'A5a.jpg', 'A5b.jpg', 'A5H1.jpg', 'A5H2.jpg', 'A5H3.jpg', 'Lemon Tree Hotel, Ahmedabad is located in the commercial area of CG Road, Navrangpura. Lemon Tree Hotel, Ahmedabad welcomes you with cheery greetings, a friendly smile and a whiff of the signature lemon fragrance. Lemon Tree Hotels are the only midscale business and leisure hotels that uplift your spirits at the end of a long day. Lemon Tree’s ‘close to home’ comfort helps you unwind with its smart in-room amenities, vibrant café and fitness center. All this, at an unbeatable value.\r\nThe centrally air conditioned hotel also offers a 24x7 multi-cuisine coffee shop – Citrus Café, a business center, a 698 sq.ft. of conference area as well as a fitness center to keep you feeling fresh-as-a-lemon.'),
('A06', 'N', 'Y', 'Y', 'Y', 'https://www.booking.com/hotel/in/divans-bungalow.en-gb.html?aid=344371;label=metatrivago-hotel-1808708_xqdz-6a78e5c6af121634f9034ca8ec3cca97_los-1_nrm-1_gstadt-2_gstkid-0_curr-inr_lang-en_itt-0_trvlp-a;sid=02be2ed0f2260d024715fc3909ec4234;all_sr_blocks=180870801_115762503_0_42_0;checkin=2018-11-28;checkout=2018-11-29;dest_id=-2088270;dest_type=city;dist=0;group_adults=2;hapos=1;highlighted_blocks=180870801_115762503_0_42_0;hpos=1;room1=A%2CA;sb_price_type=total;show_room=180870801_115762503_0_42_0;srepoch=1542114539;srfid=2647cb79e7e8ab060caffc6a4d06c567fec7ddb0X1;srpvid=b9c15c75cbcf0147;type=total;ucfs=1&#hotelTmpl', 'A6a.jpg', 'A6b.jpg', 'A6H1.jpg', 'A6H2.jpg', 'A6H3.jpg', 'Divans Bungalow is a 170 year old Haveli situated in Ahmedabad. The property is located 5 km from Gandhi Ashram and 5 km from IIM. The accommodation features a 24-hour front desk, free WiFi and assisting guests with tours.\r\n\r\nAt the bed and breakfast, rooms are themed on a craft and a write-up gives details of the artisans. It includes a desk, a TV and a private bathroom. Each room is fitted with air conditioning, and certain rooms will provide you with a balcony. The rooms come with a seating area. A shared kitchen is available.\r\n\r\nThe daily breakfast offers continental and halal options. The property includes a fountain, garden and a pond.'),
('A07', 'Y', 'N', 'N', 'Y', 'http://novotel.ahmedabadtophotels.com/en/', 'A7a.jpg', 'A7b.jpg', 'A7H1.jpg', 'A7H2.jpg', 'A7H3.jpg', 'Novotel Ahmedabad offers a sleek accommodation in a shopping area of Ahmedabad. Featuring minimalist architecture, the hotel occupies a 10-story building opened in 2013.Novotel Ahmedabad features fashionable rooms complete with complimentary wireless internet, individual climate control, a laptop safe, flat-screen TV and IDD phone. They offer bathrooms fitted with a bathtub, a hairdryer and towels.\r\n\r\nThere is a restaurant for guests to enjoy their meal. The hotel has an excellent restaurant serving Asian meals. Chokhi Dhani and Global Desi Tadka are 5 minutes walking distance from Novotel Ahmedabad.The hotel has 184 air-conditioned and contemporary rooms like Suite, Executive Rooms and Superior Rooms. They are equipped with amenities like premium bedding, flat LCD TV, coffee/tea maker, workstation, and mini bar. The attached bathrooms have a shower, hair-dryer and free toiletries. Free internet, dry cleaning, laundry and room service are also provided.'),
('A08', 'Y', 'Y', 'Y', 'Y', 'https://www.radissonblu.com/en/hotel-ahmedabad', 'A8a.jpg', 'A8b.jpg', 'A8H1.jpg', 'A8H2.jpg', 'A8H3.jpg', 'Whether you’re in Ahmedabad for a productive business meeting or want to dive into local culture on vacation, the Radisson Blu Hotel Ahmedabad has the perfect room for you. Ideal for both business and leisure travelers, our hotel is just five minutes from important attractions.Book one of 115 stylish rooms and suites for an excellent home base in the heart of Gujarat’s largest city. We provide five-star amenities and incomparable service throughout your stay, from concierge services to a state-of-the-art fitness center. When you’re hungry, you can feast on local and international fare at one of our two restaurants or order room service straight to your door.Decompress with a massage at the on-site O2 Spa, or take advantage of our business center to prepare for an important meeting. Need a space for a conference or a special gathering? Reserve one of our elegant ballrooms, complete with audiovisual technology and free high-speed Internet.'),
('C01', 'Y', 'N', 'Y', 'N', 'http://www.hotelorbit.in/', 'C1a.jpg', 'C1b.jpg', 'C1H1.jpg', 'C1H2.jpg', 'C1H3.jpg', 'Hotel Orbit provides free internet access. Its a Landmark hotel in Chandigarh, the Hotel offers Home like comfort in its every well-appointed rooms. This hotel in Chandigarh is approximately 8 km away from Zakir Hussain Rose Garden. Elante hotel Chandigarh is just 5 minutes walking distance from the hotel.Hotel has Ambiance Restaurant and Sports Bar to relax and rejuvenate as you can choose form wide range of cocktails, mocktails and delicious snacks menu.There are total 36 spacious rooms that are well equipped with cable/satellite TV,mini-bar, tea/coffee maker and air-conditioner, and attached bathroom with facility of hair dryer.This hotel in Chandigarh offers front desk, room service and medical service. Guests can enjoy meals at the restaurant. This property also has travel desk and luggage storage.Hotel Orbit can be reached from Chandigarh Airport (10 km) and Chandigarh Railway Station which is approximately 3 km away.'),
('A09', 'N', 'Y', 'Y', 'Y', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `Hotel_ID` varchar(5) NOT NULL,
  `HotelName` varchar(50) NOT NULL,
  `Rating` float(5,2) NOT NULL,
  `Price` int(20) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`Hotel_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Hotel_ID`, `HotelName`, `Rating`, `Price`, `Image`, `City`, `Location`, `description`) VALUES
('A01', 'Courtyard Marriott', 4.50, 6730, 'Curtyard_Marriot.jpg', 'Ahmedabad', 'Satellite', 'fdsrdhfgk'),
('A02', 'O7 Hotel', 4.40, 3847, 'Grand_O7_Hotel.jpg', 'Ahmedabad', 'Shela', 'gdhfjyhj'),
('A03', 'Suba Star', 3.90, 2500, 'Hotel_Suba_Star.jpg', 'Ahmedabad', 'Bodakdev', 'frftjygj'),
('A04', 'Hyatt Regency', 4.50, 7500, 'Hyatt_Regency_1.jpg', 'Ahmedabad', 'Vastrapur', 'frftjygj'),
('A05', 'Lemon Tree', 4.00, 4700, 'Lemon_tree_hotel.jpg', 'Ahmedabad', 'Navrangpura', 'frftjygj'),
('A06', 'Neermas Diwan Bungglow', 4.30, 3500, 'Neemras_Diwan_Bunglow.jpg', 'Ahmedabad', 'Raikhad', 'frftjygj'),
('A07', 'Novotel', 4.40, 5700, 'Novotel.jpg', 'Ahmedabad', 'SG highway', 'frftjygj'),
('A08', 'Raddison Blu', 4.30, 7200, 'Raddison_Blu.jpg', 'Ahmedabad', 'Ambavadi', 'frftjygj'),
('A09', 'Ramada', 4.00, 4800, 'Ramada.jpg', 'Ahmedabad', 'Prahalad Nagar', 'frftjygj'),
('A10', 'Sarovar Portico', 3.80, 4300, 'Sarovar_Portico.jpg', 'Ahmedabad', 'Khanpur', 'trgy'),
('A13', 'The House of MG', 4.50, 3300, 'The_House_of_MG.jpg', 'Ahmedabad', 'Lal Darwaza', NULL),
('A14', 'The Umeed Ahmedabad', 3.20, 2500, 'The_Ummed_Ahmedabad.jpg', 'Ahmedabad', 'Hansol', NULL),
('A15', 'Tulip INN', 3.10, 3000, 'Tulip_Inn.jpg', 'Ahmedabad', 'SG highway', NULL),
('C01', 'Orbit', 3.50, 1409, 'hotel orbit.jpg', 'Chandigarh', 'Industrial Area', NULL),
('C02', 'Homotel', 4.10, 4718, 'hometel hotel.jpg', 'Chandigarh', 'Industrial Area', NULL),
('C03', 'Grate Chandigarh', 3.20, 1082, 'hotel-grate-chandigarh.jpg', 'Chandigarh', 'Zirakpur kalka', NULL),
('C04', 'James Hotel', 4.40, 4820, 'james hotels limited.jpg', 'Chandigarh', 'Sector 17', NULL),
('C05', 'Jw Marriott', 4.50, 6195, 'jw amrriot.jpg', 'Chandigarh', 'Sector 35', NULL),
('C06', 'Regenta Central', 3.90, 3227, 'regentacentralashokchandigarh.jpg', 'Chandigarh', 'Godown Area', NULL),
('C07', 'Taj Hotel', 4.40, 7080, 'taj.jpg', 'Chandigarh', 'Sector 17', NULL),
('C08', 'The Altius', 4.40, 5007, 'the altius.jpg', 'Chandigarh', 'Industrial Area', NULL),
('C09', 'The Lalit', 4.40, 6851, 'the laLit chandigarh.jpg', 'Chandigarh', 'Rajiv Gandhi', NULL),
('C10', 'The Bella Vista', 4.10, 4072, 'the_bella_vista_hotel.jpg', 'Chandigarh', 'Se', NULL),
('C11', 'The Pride KC', 4.00, 5510, 'the-pride-kc-hotel-spa-chandigarh.jpg', 'Chandigarh', 'Panchkula', NULL),
('C12', 'Welcom Hotel', 3.90, 6489, 'welcomhotel.jpeg', 'Chandigarh', 'City Center', NULL),
('M01', 'Citizen', 3.80, 3630, 'citizen.jpg', 'Mumbai', 'Juhu Beach', NULL),
('M02', 'CountryINN', 4.00, 4100, 'countryinn.jpg', 'Mumbai', 'Navi Mumbai', NULL),
('M03', 'Four Season', 4.40, 14976, 'four-seasons.jpg', 'Mumbai', 'Worli', NULL),
('M04', 'Golden Tulip', 4.00, 3623, 'goldentulip.jpg', 'Mumbai', 'Navi Mumbai', NULL),
('M05', 'Grand Residency', 4.10, 7228, 'grandresidency.jpg', 'Mumbai', 'Bandra', NULL),
('M06', 'Lucky Hotel', 3.40, 2742, 'lucky.jpg', 'Mumbai', 'Bandra', NULL),
('M07', 'Oberoi', 4.90, 18970, 'Oberoihotel.jpg', 'Mumbai', 'Nariman point', NULL),
('M08', 'Orchid', 3.80, 8063, 'orchid.jpg', 'Mumbai', 'Vile Parle', NULL),
('M09', 'Parle International ', 3.10, 2421, 'parleinternational.jpg', 'Mumbai', 'Vile Parle', NULL),
('M10', 'Ramada', 4.00, 4470, 'ramada.jpg', 'Mumbai', 'Juhu Beach', NULL),
('M11', 'Renaissance', 4.50, 9030, 'renaissance.jpg', 'Mumbai', 'Powai', NULL),
('M12', 'Royal Park', 2.90, 2464, 'royalpark.jpg', 'Mumbai', 'Sakinaka', NULL),
('M13', 'Sofitel', 4.50, 11584, 'sofitel.jpg', 'Mumbai', 'Bandra', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `User_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `ContactNumber` decimal(10,0) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`User_ID`, `Username`, `ContactNumber`, `Email`, `Password`) VALUES
(1, '16bce095', '2147483647', '16bce095@nirmauni.ac.in', '1aA*1111'),
(2, '16bce098', '1234567890', '16bce098@nirmauni.ac.in', '22222aA@'),
(3, 'tanya', '2147483647', 'motwani.tanya220@gmail.com', '33333aA#'),
(4, 'Shruti Verma', '2147483647', 'shruti.verma11111@gmail.com', '44444aA$'),
(5, 'praddy', '987654321', 'pradhumanbagadi@gmail.com', '55555aA%'),
(6, '16bce107', '2147483647', '16bce107@nirmauni.ac.in', 'Meetu@!1998'),
(7, 'kanchi', '2147483647', 'kratika468@yahoo.com', '77777aA&'),
(8, '16bce091', '0', '16bce091@nirmauni.ac.in', '88888aA*'),
(9, 'urja0901', '9644408050', 'shrutiverma1098@gmail.com', '88888aA*'),
(10, 'shubhsmita', '9457224413', 'shubhsmita20@gmail.com', 'G()ldfish1'),
(11, '16bce002', '3245671091', '16bce002@nirmauni.ac.in', '*1Aa1111'),
(12, 'osho rawal', '8168776895', 'oshorawal26@gmail.com', '99999aA('),
(13, 'Sanjana', '9755592374', 'sanjanamotwani10003@gmail.com', '00000aA)'),
(14, 'gaurav', '8720000036', 'gaurav@gmail.com', '12345aA!');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `Subs_id` int(7) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`Subs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`Subs_id`, `Email`) VALUES
(1, ''),
(2, ''),
(3, '16bce095@nirmauni.ac.in'),
(4, 'motwani.tanya220@gmail.com'),
(5, 'kratika468@yahoo.com'),
(6, 'shruti.verma11111@gmail.com'),
(7, 'vikasjobanputra@hotmail.com'),
(8, 'shubhsmita20@gmail.com'),
(9, '16bce095@nirmauni.ac.in'),
(10, 'oshorawal26@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
