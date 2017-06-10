-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2017 at 05:51 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MySite`
--

-- --------------------------------------------------------

--
-- Table structure for table `Car`
--

CREATE TABLE `Car` (
  `CarId` int(5) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Price` decimal(6,2) NOT NULL,
  `Ratings` int(1) NOT NULL,
  `Mileage` decimal(4,2) NOT NULL,
  `Engine` int(4) NOT NULL,
  `Transmission` varchar(1) NOT NULL,
  `ABS` int(1) NOT NULL,
  `AirBags` int(1) NOT NULL,
  `Review` varchar(10000) NOT NULL,
  `Brand` varchar(8) NOT NULL,
  `Image` varchar(10000) NOT NULL,
  `Type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `Car`
--

INSERT INTO `Car` (`CarId`, `Name`, `Price`, `Ratings`, `Mileage`, `Engine`, `Transmission`, `ABS`, `AirBags`, `Review`, `Brand`, `Image`, `Type`) VALUES
(1, 'A3', '27.10', 3, '20.38', 1798, 'A', 1, 4, 'The best in its class At 4.46 metres, the A3 sedan is shorter than the A4 by full 0.3 metres. It has MQB underpinning like most other new models under the VW umbrella. The overall appearance is typical Audi and most design elements are similar to that of the A4 sedan and this includes lights, lines on the side and the stance of the car. Audi says that the new model is a cross between coupe and three-box design. Internationally the car is mainly sold as a hatchback but this model is not expected to be launched in the Indian market.', 'Audi', 'img/aa3.jpg', 'SUV'),
(2, 'Q3', '30.50', 3, '17.71', 1968, 'A', 1, 4, 'It is still the best package in the budget luxury cars. It offers decent looks, performance, space, efficiency and little bit of off-roading with the AWD.', 'Audi', 'img/aq3.jpg', 'SUV'),
(3, 'A4', '38.10', 4, '17.84', 1395, 'A', 1, 4, 'The A4 has been one of the most popular model from the German car maker and has helped Audi build a brand for itself along with the Q7 SUV. The all-new 2016 Audi A4 made its official debut at the 2015 Frankfurt Motor Show and was showcased at the Auto Expo 2016 held in Greater Noida earlier this year.', 'Audi', 'img/aa4.jpg', 'Sedan'),
(4, 'A3 Cabrio', '47.35', 3, '19.20', 1798, 'A', 1, 4, 'Audi launched the A3 Cabriolet for the Indian market on December 11, 2014. Based on the hard top A3 sedan, the two-door, four-seater vehicle with a retractable roof top is targeted at consumers looking for joy and style while driving with the roof down. ', 'Audi', 'img/aa3c.jpg', 'Sedan'),
(5, 'Q5', '48.44', 4, '12.80', 1968, 'A', 1, 4, 'The Audi Q5 is a perfect combination of sporty dynamism offered in a sedan combined with highly variable interiors that offer versatile options for leisure or business use. Strong and efficient engines, quattro permanent all-wheel drive and agile running gear have been brought together to create a superior technology package for both on- and off-road driving.', 'Audi', 'img/aq5.jpg', 'SUV'),
(6, 'Vantage', '135.00', 3, '5.20', 4735, 'A', 1, 2, 'The engineers at Aston Martin gave Vantage the best of technical specifications. Aston Martin Vantage V8 Sport is 7-Speed geared, with Automatic transmission, Ventilated & Grooved Steel Discs brakes at the front and Ventilated & Grooved Steel Discs brakes at the rear along with Independent Double Wishbone front suspension and Independent Double Wishbone rear suspension, making it a rather safe drive.', 'Aston M', 'img/amva.jpg', 'Sport'),
(7, 'Rapide', '329.00', 4, '6.02', 1799, 'M', 1, 4, ' The interiors of this drive feature Outside Temperature Display, Leather Seats, Heater, Digital Odometer, AdjustableSteering & Airconditioner. ', 'Aston M', 'img/amr.jpg', 'Sport'),
(8, 'Vanquish', '385.00', 4, '4.00', 6000, 'A', 1, 3, 'If these are the features and specs of Aston Martin Vanquish that concerns you more, it offers Multi Function Steering System, Automatic Climate Control, Engine Start Stop Button, PowerWindowsFront, Power Steering & Front Cup Holders.', 'Aston M', 'img/amvq.jpg', 'Sport'),
(9, 'RE60', '2.00', 4, '32.00', 650, 'M', 0, 0, 'Perfect Entry Level Electric Car', 'Bajaj', 'img/re60.jpg', 'Hatch'),
(10, 'Flying S', '322.00', 4, '6.20', 3993, 'A', 1, 4, 'To talk of the general specifications of Bentley Flying Spur, The interiors of this drive feature Leather Seats, Heater, Digital Odometer, AdjustableSteering, Airconditioner & Cigarette Lighter. To give your Automatic those coveted hot looks, there are options of ABS, SeatBelt Warning, Central Locking, Passanger Airbag, Driver Airbag & Adjustable Seats.', 'Bentley', 'img/bfs.jpg', 'Sedan'),
(11, 'Bentayga', '385.00', 5, '10.90', 5950, 'A', 1, 4, 'An All wheel Drive Super Luxury SUV.', 'Bentley', 'img/bbt.jpg', 'SUV'),
(12, 'X1', '30.99', 4, '16.60', 1995, 'A', 1, 4, 'The Premium SUV', 'BMW', 'img/bmx1.jpg', 'SUV'),
(13, '320d', '36.90', 3, '18.44', 1995, 'A', 1, 4, 'A nice entry level BMW Sedan', 'BMW', 'img/bm320.jpg', 'Sedan'),
(14, '520d', '50.50', 4, '15.20', 1995, 'A', 1, 4, 'An essence of pure luxury.', 'BMW', 'img/bm520.jpg', 'Sedan'),
(15, 'i8', '214.00', 4, '14.00', 2650, 'A', 1, 4, 'Best in Class', 'BMW', 'img/bmi8.jpg', 'Sport'),
(16, 'Beat', '4.02', 4, '19.30', 1199, 'M', 0, 0, 'Good Entry level Hatch', 'Chvrolet', 'img/chebet.jpg', 'Hatch'),
(17, 'Cruze', '14.95', 4, '17.68', 2443, 'A', 1, 4, 'A premium Sedan on a budget', 'Chvrolet', 'img/checru.jpg', 'Sedan'),
(18, 'Sail', '6.25', 4, '18.90', 1248, 'M', 1, 2, 'Nice Sedan', 'Chvrolet', 'img/chesai.jpg', 'Sedan'),
(19, 'Thar', '5.93', 4, '15.03', 2523, 'M', 0, 0, 'The engineers at Mahindra gave Thar the best of technical specifications. Mahindra Thar DI 4X2 PS is 5 Speed geared, with Manual transmission, Disc brakes at the front and Drum brakes at the rear along with Semi Elliptical Leaf Spring front suspension and Semi Elliptical Leaf Spring rear suspension, making it a rather safe drive.', 'Mahindra', 'img/mahtha.jpg', 'SUV'),
(20, 'Xylo', '8.67', 3, '11.40', 2489, 'M', 0, 1, 'The engineers at Mahindra gave Xylo the best of technical specifications. Mahindra Xylo D2 Maxx is 5 Speed geared, with Manual transmission, Disc brakes at the front and Drum brakes at the rear along with Double wishbone Type IFS front suspension and Multi-Link Coil Spring rear suspension, making it a rather safe drive.', 'Mahindra', 'img/mahxyl.jpg', 'MUV'),
(21, 'Scorpio', '9.17', 5, '10.30', 2609, 'M', 1, 2, 'The engineers at Mahindra gave Scorpio the best of technical specifications. Mahindra Scorpio Getaway is 5 Speed geared, with Manual transmission, Disc brakes at the front and Drum brakes at the rear along with Double Wishbone front suspension and Semi-Elliptical Leaf Spring rear suspension, making it a rather safe drive.\r\n\r\n', 'Mahindra', 'img/mahsco.jpg', 'SUV'),
(22, 'XUV500', '12.46', 4, '13.80', 1997, 'A', 1, 4, 'The engineers at Mahindra gave XUV500 the best of technical specifications. Mahindra XUV500 W4 1.99 mHawk is 6 Speed geared, with Manual transmission, Disc brakes at the front and Disc brakes at the rear along with MacPherson Strut front suspension and Multi Link rear suspension, making it a rather safe drive.', 'Mahindra', 'img/mahxuv.jpg', 'SUV'),
(23, 'Alto 800', '2.47', 3, '20.30', 796, 'M', 0, 0, 'The engineers at Maruti gave Alto 800 the best of technical specifications. Maruti Alto 800 STD is 5 Speed geared, with Manual transmission, Solid Disc brakes at the front and Drum brakes at the rear along with McPherson Strut front suspension and 3 Link Rigid rear suspension, making it a rather safe drive.', 'Maruti', 'img/maralt.jpg', 'Hatch'),
(24, 'Celerio', '4.82', 4, '23.80', 793, 'M', 0, 0, 'The engineers at Maruti gave Celerio the best of technical specifications. Maruti Celerio LXI is 5 Speed geared, with Manual transmission, Ventilated Disc brakes at the front and Drum brakes at the rear along with MacPherson Strut front suspension and Coupled Torsion Beam rear suspension, making it a rather safe drive.', 'Maruti', 'img/marcel.jpg', 'Hatch'),
(25, 'WagonR', '4.11', 4, '17.08', 998, 'M', 0, 2, 'The engineers at Maruti gave Wagon R the best of technical specifications. Maruti Wagon R LXI is 5 Speed geared, with Manual transmission, Ventilated Disc brakes at the front and Drum brakes at the rear along with MacPherson Strut front suspension and Isolated Trailing Link rear suspension, making it a rather safe drive.', 'Maruti', 'img/marsti.jpg', 'Hatch'),
(26, 'EON', '3.31', 4, '17.30', 814, 'M', 0, 2, 'The engineers at Hyundai gave EON the best of technical specifications. Hyundai EON D Lite is 5 Speed geared, with Manual transmission, Disc brakes at the front and Drum brakes at the rear along with MacPherson Strut front suspension and Torsion Beam rear suspension, making it a rather safe drive.', 'Hyundai', 'img/hyueon.jpg', 'Hatch'),
(27, 'i10', '4.36', 4, '16.40', 1086, 'M', 0, 2, 'The engineers at Hyundai gave i10 the best of technical specifications. Hyundai i10 Era is 5 Speed geared, with Manual transmission, Ventilated Disc brakes at the front and Drum brakes at the rear along with MacPherson Strut front suspension and Coupled Torsion Beam rear suspension, making it a rather safe drive.', 'Hyundai', 'img/hyui10.jpg', 'Hatch'),
(28, 'i20', '8.12', 5, '17.25', 1396, 'M', 1, 4, 'The engineers at Hyundai gave i20 Active the best of technical specifications. Hyundai i20 Active 1.2 is 5 Speed geared, with Manual transmission, Disc brakes at the front and Drum brakes at the rear along with MacPherson Strut front suspension and Coupled Torsion Beam rear suspension, making it a rather safe drive.', 'Hyundai', 'img/hyui20.jpg', 'Hatch'),
(29, 'Amaze', '6.66', 3, '21.00', 1498, 'M', 1, 2, 'The engineers at Honda gave Amaze the best of technical specifications. Honda Amaze E i-VTEC is 5 Speed geared, with Manual transmission, Disc brakes at the front and Drum brakes at the rear along with MacPherson Strut front suspension and Torsion Beam rear suspension, making it a rather safe drive.', 'Honda', 'img/honama.jpg', 'Sedan'),
(30, 'City', '10.75', 5, '21.60', 1498, 'A', 1, 4, 'The engineers at Honda gave City the best of technical specifications. Honda City i-VTEC S is 5 Speed geared, with Manual transmission, Disc brakes at the front and Drum brakes at the rear along with MacPherson Strut front suspension and Torsion Beam rear suspension, making it a rather safe drive.', 'Honda', 'img/honcit.jpg', 'Sedan'),
(31, 'BRV', '10.13', 4, '18.40', 1498, 'A', 1, 4, 'The engineers at Honda gave BRV the best of technical specifications. Honda BRV i-VTEC E MT is 6 Speed geared, with Manual transmission, Disc brakes at the front and Drum brakes at the rear along with MacPherson Sturt front suspension and Torsion Beam rear suspension, making it a rather safe drive.', 'Honda', 'img/honcvr.jpg', 'SUV'),
(32, 'Etios', '6.94', 4, '20.32', 1364, 'M', 1, 2, 'The engineers at Toyota gave Etios Liva the best of technical specifications. Toyota Etios Liva 1.2 GX is 5 Speed geared, with Manual transmission, Ventilated Disc brakes at the front and Drum brakes at the rear along with MacPherson Strut front suspension and Torsion Beam rear suspension, making it a rather safe drive.', 'Toyota', 'img/toyeti.png', 'Sedan'),
(33, 'Innova', '19.40', 5, '20.45', 1568, 'M', 1, 2, 'A luxury MUV', 'Toyota', 'img/toyinn.jpg', 'MUV'),
(34, 'Nano', '1.80', 4, '19.53', 679, 'M', 0, 0, 'A car by visionary Ratan Tata for the lower middle class', 'Tata', 'img/tatnan.jpg', 'Hatch'),
(35, 'Safari', '10.75', 5, '16.64', 2338, 'M', 1, 4, 'The classical SUV, A perfect Rival for the Mahindra Scorpio ', 'Tata', 'img/tatsaf.jpg', 'SUV'),
(36, 'Tiago', '6.78', 3, '20.23', 1245, 'M', 1, 2, 'A replacememt for indica', 'Tata', 'img/tatzes.jpg', 'Hatch'),
(37, 'A6', '64.00', 1, '23.00', 2399, 'A', 1, 4, 'A class apart Sedan with Out of the world Features and Super Stable Suspension.', 'Audi', 'img/aa6.jpg', 'Sedan');

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `Name` varchar(20) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Message` text,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`Name`, `Phone`, `Message`, `email`) VALUES
('vasu', '324235', 'asdqwrsfasf', 'qwer@qwe.com'),
('Shivanshu Chaudhary', '9456074878', 'lalalalala', 'shivanshuchaudhary97@gmail.com'),
('Shivanshu Chaudhary', '0120245678', 'Gaadi dede', 'shivanshuchaudhary97@gmail.com'),
('Shivanshu Chaudhary', '2200220044', 'Pls', 'shivanshuchaudhary97@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Dealer`
--

CREATE TABLE `Dealer` (
  `Did` int(3) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `PhNo` varchar(12) DEFAULT NULL,
  `PhNo2` varchar(12) DEFAULT NULL,
  `Eid` varchar(30) DEFAULT NULL,
  `Brand` varchar(15) DEFAULT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(25) DEFAULT NULL,
  `Status` int(1) NOT NULL DEFAULT '0',
  `PIN` int(6) NOT NULL DEFAULT '201005',
  `Auth` int(3) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Dealer`
--

INSERT INTO `Dealer` (`Did`, `Name`, `PhNo`, `PhNo2`, `Eid`, `Brand`, `City`, `State`, `Status`, `PIN`, `Auth`) VALUES
(1, 'Audi Delhi Central', '9650133133', '9650133134', 'info@audidelhicentral.in', 'Audi', 'Delhi', 'Delhi', 1, 201003, 0),
(2, 'Motorcraft Sales', '7669627281', '7669627282', 'sales@motorcraft.in', 'Maruti', 'Ghaziabad', 'Uttar Pradesh', 1, 201005, 10),
(3, 'Auto Vikas Sales & S', '8287555611', '8287555615', 'Deepak.saini@autovikas.com', 'Tata', 'Delhi', 'Delhi', 1, 201007, 10),
(4, 'MR Hyundai', '1800114645', '1800114643', 'lalalala@lala.com', 'Hyundai', 'Ghaziabad', 'Uttar Pradesh', 1, 201005, 10),
(5, 'Orchid Centre', '1244510200', '1244510202', 'info@audigurgaon.in', 'Audi', 'Gurgaon', 'Haryana', 1, 201008, 10),
(6, 'Bird Automotive', '01244029029', '012440290232', 'birdindia@bmw.co.in', 'BMW', 'Gurgaon', 'Haryana', 1, 201008, 10),
(7, 'Stirling', '0868302384', '9456074876', 'MercMerc@merc.com', 'Mercedes', 'Gurgaon', 'Haryana', 0, 201008, 10),
(8, 'La La Land', '0120245673', '0120223564', 'vasu@hyunin.com', 'Hyundai', 'GHAZIABAD', 'UTTAR PRADESH', 1, 201005, 23);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(5) NOT NULL,
  `heading` text,
  `Subhead` text,
  `article` text,
  `date` date NOT NULL DEFAULT '2017-03-03'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `heading`, `Subhead`, `article`, `date`) VALUES
(1, 'McLaren Already Has A Special Edition 720S', 'Dubbed the 720S Velocity, the car is one of the five special edition themes from McLaren Special Operations and demands a hefty premium over the stock 720S', 'The McLaren 720S is one hell of a supercar, if one goes by the spec sheet at least. After all, a car that comes with a 4.0-litre twin-turbo flatplane crank V8 that makes 720PS power and 770Nm torque can only be called a beast. With dihedral doors and a stunning design, it has the show to match the go. However, what happens when you give such a car to its maker\'s skunkworks division. In the 720S\' case, it transforms into the 720S Velocity.\r\nThe 720S made its world debut at the 2017 Geneva Motor Show amid a lot of hype. Little did anyone realise that McLaren Special Operations (MSO) was already hard at work to make a special edition of an already special car. So, what makes the 720S Velocity a special edition vehicle? Well, there are no changes to the powertrain. It simply shows just what customisation options 720S owners can opt for (for a premium, of course). To that end, the exterior comes in a dual-tone paint finish in Volcano and Nerello Red shades. The Narallo Red shade can be seen at the front and the top half of the car which then fades to the back which has Volcano Red paint.', '2017-03-03'),
(2, 'Renault Kwid Racer and Climber to be sold as special edition models!', 'Update: Kwid Climber Launched in India at Rs 4.3 lakh (ex-showroom, Delhi).', 'Renault showcased two concepts based on the Kwid at the 2016 Auto Expo called the Kwid Racer and Kwid Climber. Now the latest news is that these concepts could be released as special or limited edition models soon. Let’s take a look at what the two concepts have in store.\r\nThe Kwid Racer concept at the Auto Expo looked stunning to say the least. I was quite surprised by how Renault managed to make an odd looking car like the Kwid into such a brute race machine.', '2017-03-03'),
(3, '2016 Honda City (Updated)', 'The 4th-generation Honda City has got a mild update for the new year', 'The 4th-generation Honda City has got a mild update for the new year. Honda Siel has introduced a new variant - City VX (O) BL trim. The \'BL\' standing for Black Leather trim. Essentially everything else remains the same, the only change would be the black leather treatment to the interiors. Earlier, it was offered with dual tone, beige with black inserts. Here is a picture of the new option as compared to the old one. The new interiors are available on the manual transmissions of both - diesel and petrol variants.\r\nAlong with changes in the interior, it also gets dual SRS airbags as standard. The price of the base variant \'E\' has been increased by 8,000 INR and is in tune with the rest of it\'s competitors who have done the same to buckle up for the change in norms from 2017. Since the company has mainly added new features to the lineup, no changes have been made under the hood. The updated Honda City continues to feature the same 1.5-litre i-VTEC petrol and 1.5-litre i-DTEC diesel options.\r\nOn this occasion, Jnaneswar Sen, Senior Vice President, Marketing & Sales, Honda Cars India Ltd said, “We hope the mix of premium, luxury and safety enrichment to the City line-up will be appreciated by our customers”.\r\nUpdated Honda City Prices (ex-showroom, Delhi)\r\nPetrol variants\r\nE MT – Rs 7.63 lakh\r\nS MT – Rs 8.29 lakh\r\nSV – Rs 8.89 lakh\r\nV MT – Rs 9.47 lakh\r\nVX MT – Rs 10.44 lakh\r\nSV CVT – Rs 9.92 lakh\r\nVX CVT – Rs 11.53 lakh\r\nVX (O) – Rs 10.74 lakh', '2017-03-03'),
(4, 'Scorpion MK IV to be Launched in India', 'We in India love off-roaders, I hope I said it right! With the growing popularity of SUVs in the country, very little of us who own them take it off-road. ', ' For the serious guys who means business out there, there is likely to be a new addition to the group. A vehicle that can perhaps give nightmares to other traditional off-road vehicles sold in the country now. A JV between Preferred Chassis Fabrication and India’s Sarbloh Motors called the IronScorpion HMV Pvt. Ltd will introduce the Scorpion MK IV in India soon.\r\nScorpion MK series has been in production in the USA since 1997 and used by the army in the remotest and toughest of terrains around the world. The MK IV which scheduled be assembled in India will be the first off-road buggy to be made road legal in the country. MK IV has a revolutionary suspension setup that allows it to have unbelievable wheel articulation while keeping its occupants comfortable at the same time. This gives it impressive off-road capabilities since all the four wheels stay in contact with the surface most of the time. MK IV comes powered with an option of either a 5.7-litre V8 petrol motor or a 3.9-litre, 4-cylinder Cummins diesel mill. Look at the picture below to see how mad this machine is!', '2017-03-03'),
(5, 'Mahindra Adventure Off-Road Training Academy: Kicking Up A Dust Storm\r\n', 'The Mahindra Adventure Off-Road Training Academy is a must-experience camp for adventure-seeking enthusiasts\r\n\r\n', 'Off-roading is a skill that only a few dare to learn and even fewer dare to hone. Off-roading isn’t simply driving on broken surfaces once the tarmac runs out. It is far more technical than most would have you believe. Hitting the right spot at the right time with the right amount of power is essential and the main catalyst for the adrenaline being pumped into your system. So no wonder that it is an adventure that only keen enthusiasts can connect with.\r\n\r\nMahindra and Mahindra (M&M) is one automaker that primarily concentrates on building utility vehicles. And the company’s 4x4s have always enjoyed an almost cult following. While the home-grown auto giant appreciates that, it also wants its customers to be safe and prepared to withstand any driving-related crises. That’s where the Mahindra Off-Road Training Academy comes in which also happens to be India’s first and only off-road training academy. So it’s a no brainer I grabbed the opportunity to represent Zigwheels and get a taste of the training school for myself. As the name suggests, the camp is designed to teach drivers on how to tackle tough terrains when going off-road.', '2017-03-03'),
(6, 'alpha beta', 'gamma theta', 'lovely zeta', '2017-03-03'),
(7, 'NASCAR 2017 Indian Version', 'Ford to host the rally', 'Nascar 2017 is going to be held at Udaipur this year. The heat is On.', '2017-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `userinfotbl`
--

CREATE TABLE `userinfotbl` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfotbl`
--

INSERT INTO `userinfotbl` (`username`, `password`, `status`) VALUES
('admin', 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Car`
--
ALTER TABLE `Car`
  ADD PRIMARY KEY (`CarId`);

--
-- Indexes for table `Dealer`
--
ALTER TABLE `Dealer`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Car`
--
ALTER TABLE `Car`
  MODIFY `CarId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `Dealer`
--
ALTER TABLE `Dealer`
  MODIFY `Did` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
