-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 06:53 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `life_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`) VALUES
(4, 'si', 'si'),
(5, 'shahwaz ', 'shahwaz234$');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(256) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(23, 'MU Bio-Tech', 1),
(24, 'Products', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(1, 'Aqil', 'aqil@gmail.com', '1234567890', 'test Query', '2020-10-14 16:35:40'),
(9, '', 'asd@gmail.com', '1234567890', 'cd', '2021-02-05 04:34:25'),
(10, 'asad', 'asd@gmail.com', '9087654321', 'osm', '2021-02-05 04:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `indication` text NOT NULL,
  `best_product` int(11) NOT NULL,
  `meta_title` text NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `sub_categories_id`, `name`, `image`, `mrp`, `price`, `qty`, `short_desc`, `indication`, `best_product`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES
(0, 24, 1, 'AP-2 PLUS', '204430520_56.jpg', 130, 113, 0, 'TABLETS\r\nAceclofenac 100 MG +\r\nParacetamol 325 MG', 'Gives relief from pain and inflammation\r\nCombination is very effective in\r\nJoints pain & swelling.', 0, 'AP-2 PLUS', '', 'PAIN KILLER , RELIAF PAIN, JOINT PAIN', 1),
(2, 23, 5, 'Inliv', '913970541_2.jpg', 100, 80, 0, 'cough syrup', 'cough syrup', 0, 'cough syrup', '', 'cough syrup', 1),
(3, 24, 1, 'DP2-MR', '968830592_52.jpg', 110, 90, 0, 'Tablets\r\nDiclofenac Potassium 50 MG +\r\nChlorzoxazone 250 MG\r\nParacetamol 325 MG', 'Relaxes the muscles & remove\r\nmuscular spasm.\r\nIncrease the mobility of involved\r\nmuscle & relieves pain.', 0, 'DP2-MR', '', 'RELIEF MUSCLE PAIN', 1),
(5, 24, 1, 'DP-2', '635674142_54.jpg', 300, 290, 0, 'Tablets\r\nDiclofenac Potassium\r\n& Paracetamol Tablets', 'Relieves pain and associated\r\nfever during cold & u.', 0, 'DP-2', '', 'pain killer,pain relief,', 1),
(6, 24, 1, 'DP-2 T', '209975513_53.jpg', 189, 170, 0, 'Diclofenac Potassium', 'Relieves pain and associated\r\nfever during cold & flu.', 0, 'DP-2 TABLETS', '', 'PAIN KILLER, CANCER', 1),
(7, 24, 1, 'DP-2-SP', '505102591_51.jpg', 160, 123, 0, 'Diclofenac Sodium, Paracetamol\r\n& Serraliopeptidase Tablets', 'Soft tissue trauma.\r\nPostoperative Pain.\r\nDental Pain.\r\nEpisiotomy.', 0, 'DP-2-SP', '', 'Soft tissue trauma.\r\nPostoperative Pain.\r\nDental Pain.\r\nEpisiotomy.', 1),
(8, 24, 1, 'IBUCIP', '921132863_50.jpg', 0, 0, 0, 'Aceclofenac &\r\nParacetamol Tablets', 'Gives relief from pain and inflammation.\r\nCombination is very effective in\r\njoints pain & swelling.', 0, 'IBUCIP', '', 'Gives relief from pain and inflammation.\r\nCombination is very effective in\r\njoints pain & swelling.', 1),
(9, 24, 4, 'MB-MOX-250', '847892692_49.jpg', 0, 0, 0, 'CAPSULS\r\nAmoxycillin\r\nCapsules I.P. 250 mg.', 'Upper & lower respiratory tract infections,\r\nGenitourinary tract infections, Skin & soft\r\ntissue infections & ENT infections.', 0, 'MB-MOX-250', '', 'SKIN CARE SOFT SKIN', 1),
(10, 24, 4, 'MB-MOX-500', '958973117_48.jpg', 0, 0, 0, 'Amoxycillin\r\nCapsules I.P. 500 mg.', 'Upper & lower respiratory tract infections,\r\nGenitourinary tract infections, Skin & soft\r\ntissue infections & ENT infections.', 0, 'MB-MOX-500', '', 'Upper & lower respiratory tract infections,\r\nGenitourinary tract infections, Skin & soft\r\ntissue infections & ENT infections.', 1),
(11, 24, 4, 'MBSTREP', '355217061_47.jpg', 0, 0, 0, 'CAPSULE Loperamide 2 MG', 'Indicated for central and symtomatic relief\r\nof acute non specic.\r\nDiarrhoea associated with inammatory\r\nbowel diseases', 0, 'MBSTREP', '', 'Indicated for central and symtomatic relief\r\nof acute non specic.\r\nDiarrhoea associated with inammatory\r\nbowel diseases', 1),
(12, 24, 1, 'MB Prost', '558963860_46.jpg', 0, 0, 0, 'Mifepristone 200 mg\r\n& Misoprostol 200 mg Tablets', 'Mifepristone 200 mg\r\n& Misoprostol 200 mg Tablets', 0, 'Mifepristone 200 mg\r\n& Misoprostol 200 mg Tablets', '', 'Mifepristone 200 mg\r\n& Misoprostol 200 mg Tablets', 1),
(13, 24, 1, 'MUCEF-200', '608702703_45.jpg', 0, 0, 0, 'Tablets\r\nCefixime 200 MG', 'Effective intreating respiratory\r\ntract infections.\r\nShows very high effectiveness\r\nin typhoid & UTI\'s.', 0, 'MUCEF-200 Tablets', 'Effective intreating respiratory\r\ntract infections.\r\nShows very high effectiveness\r\nin typhoid & UTI\'s.', 'MUCEF-200 Tablets\r\nEffective intreating respiratory\r\ntract infections.\r\nShows very high effectiveness\r\nin typhoid & UTI\'s.', 1),
(14, 24, 1, 'Nitefite-100', '421067786_44.jpg', 0, 0, 0, 'Tablets\r\nSildenafil Tablets IP 100 mg', 'Sildenafil is a medication used to treat\r\nerectile dysfunction and pulmonary arterial\r\nhypertension. It is unclear if it is\r\neffective for treating sexual dysfunction\r\nin women. It is taken by mouth or\r\ninjection into a vein.', 0, 'Nitefite-100\r\nTablets\r\nSildenafil Tablets IP 100 mg', '', 'Sildenafil is a medication used to treat\r\nerectile dysfunction and pulmonary arterial\r\nhypertension. It is unclear if it is\r\neffective for treating sexual dysfunction\r\nin women. It is taken by mouth or\r\ninjection into a vein.', 1),
(15, 24, 1, 'NP-2', '356490048_42.jpg', 0, 0, 0, 'Nimesulide & Paracetamol Tablets', 'Acute muscul o keletal disorders.\r\nLow back pain.\r\nSports injuries.\r\nSevere dental pain.\r\nArthritis.\r\nDysmenorrhea\r\nGynecological condition.', 0, 'Acute muscul o keletal disorders.\r\nLow back pain.\r\nSports injuries.\r\nSevere dental pain.\r\nArthritis.\r\nDysmenorrhea\r\nGynecological condition.', 'Acute muscul o keletal disorders.\r\nLow back pain.\r\nSports injuries.\r\nSevere dental pain.\r\nArthritis.\r\nDysmenorrhea\r\nGynecological condition.', 'Acute muscul o keletal disorders.\r\nLow back pain.\r\nSports injuries.\r\nSevere dental pain.\r\nArthritis.\r\nDysmenorrhea\r\nGynecological condition.', 1),
(16, 24, 1, 'OLA-200', '199095680_41.jpg', 0, 0, 0, 'Ofloxacin 200 MG', 'Effective in chronic bronchitis & pneumonia.\r\nUsed to treat complicated UTI\'s.', 0, 'Effective in chronic bronchitis & pneumonia.\r\nUsed to treat complicated UTI\'s.', 'Effective in chronic bronchitis & pneumonia.\r\nUsed to treat complicated UTI\'s.', 'Effective in chronic bronchitis & pneumonia.\r\nUsed to treat complicated UTI\'s.', 1),
(17, 24, 1, 'OLA-200 TAB', '368852014_36.jpg', 0, 0, 0, 'Ofloxacin 200 MG', 'Effective in chronic bronchitis & pneumonia.\r\nUsed to treat complicated UTI\'s.', 0, 'Effective in chronic bronchitis & pneumonia.\r\nUsed to treat complicated UTI\'s.', 'Effective in chronic bronchitis & pneumonia.\r\nUsed to treat complicated UTI\'s.', 'Effective in chronic bronchitis & pneumonia.\r\nUsed to treat complicated UTI\'s.', 1),
(18, 24, 3, 'Pencoderm++', '249508383_40.jpg', 0, 0, 0, 'Clobetasol Propionate, Miconazole Nitrate\r\n& Neomycin Sulphate Cream', 'Pencoderm++ is used to treat Bacterial\r\ninfections and fungal infections. The\r\ncures slam infections and dermatoses.', 0, 'Clobetasol Propionate, Miconazole Nitrate\r\n& Neomycin Sulphate Cream', '', 'Pencoderm++ is used to treat Bacterial\r\ninfections and fungal infections. The\r\ncures slam infections and dermatoses.', 1),
(19, 24, 1, 'RLD Tablets', '122401422_39.jpg', 0, 0, 0, 'Loperamide 2Mg', 'Very Effective in Symptomatic\r\nrelief of diarrhoea .\r\nIndicated for diarrhoea resulting from\r\ngastroenteritis orin hemmatory\r\nbowel diseases.', 0, 'Very Effective in Symptomatic\r\nrelief of diarrhoea .\r\nIndicated for diarrhoea resulting from\r\ngastroenteritis orin hemmatory\r\nbowel diseases.', 'Very Effective in Symptomatic\r\nrelief of diarrhoea .\r\nIndicated for diarrhoea resulting from\r\ngastroenteritis orin hemmatory\r\nbowel diseases.', 'Very Effective in Symptomatic\r\nrelief of diarrhoea .\r\nIndicated for diarrhoea resulting from\r\ngastroenteritis orin hemmatory\r\nbowel diseases.', 1),
(20, 24, 4, 'ROL-DSR', '848582712_38.jpg', 0, 0, 0, 'Capsules\r\nRabeprazole 20 MG (Enteric Coated)\r\nDomperidone 30 MG (Sustained Release)', 'Combination improves the condition of\r\npatients suffering from GERD.\r\nSuppressess gastric acid & Feeling\r\nof naussea & vomiting.', 1, 'ROL-DSR \r\nRabeprazole 20 MG (Enteric Coated)\r\nDomperidone 30 MG (Sustained Release)', '', 'Combination improves the condition of\r\npatients suffering from GERD.\r\nSuppressess gastric acid & Feeling\r\nof naussea & vomiting.', 1),
(21, 24, 3, 'Skin Wite', '937249663_37.jpg', 90, 70, 0, 'Cream\r\nHydroquinone, Trnoin &\r\nMometasone Furoate Cream', 'Skin wite is used to reduce the color, dark spot\r\nfreckles and other discoloration of skin.\r\nThis cream possesses the ability to inhabit\r\nthe enzyme that mess with the skin cells\r\nand also act as a bleaching agent.', 1, 'Skin Wite', '', 'Skin Wite  glow  face', 1),
(22, 24, 1, 'MUPOD-200', '828404920_35.jpg', 0, 0, 0, 'Cefpodoxime Proxel\r\nDispersible Tablets', 'Used to treat infections caused by bacteria\r\nincluding upper respiratory infections\r\near infections, skin infections and\r\nurinary tract infections.', 1, 'MU-POD 200', '', 'Used to treat infections caused by bacteria\r\nincluding upper respiratory infections\r\near infections, skin infections and\r\nurinary tract infections.', 1),
(23, 24, 4, 'KONAZOLE-IT', '347365520_34.jpg', 0, 0, 0, 'Capsules\r\nItraconazole Capsules\r\nB.P. 200 mg', 'used to treat a number of fungal infections\r\nThis includes aspergillosis, blasstomycosis\r\ncoxidiodomycosis, histoplasmosis and\r\npara coccidioidomycosis.', 0, 'KONAZOLE-IT', '', 'used to treat a number of fungal infections\r\nThis includes aspergillosis, blasstomycosis\r\ncoccidiodomycosis, histoplasmosis and\r\nparacoccidioidomycosis.', 1),
(24, 24, 4, 'PEN-DSR', '661214871_33.jpg', 0, 0, 0, 'Capsules\r\nPantoprazole Gastro Resistant &\r\nDomperidone Prolonged\r\nRelease Capsules IP', 'Used to treat certain stomach and esophagus\r\nproblems (such as acid reux). This medication\r\nrelieves symptoms such as heartburn\r\ndifficulty swallowing and\r\npersistent cough.', 0, 'Capsules\r\nPantoprazole Gastro Resistant &\r\nDomperidone Prolonged\r\nRelease Capsules IP', '', 'Used to treat certain stomach and esophagus\r\nproblems (such as acid reux). This medication\r\nrelieves symptoms such as heartburn\r\ndifficulty swallowing and\r\npersistent cough.', 1),
(25, 24, 1, 'DP-2 FIT', '433699825_32.jpg', 0, 0, 0, 'Diclofenac Sodium &\r\nParacetamol Tablets I.P.', 'Relieves pain and associated\r\nfever during cold & flu.', 1, 'DP2 FIT', '', 'Relieves pain and associated\r\nfever during cold & flu.', 1),
(26, 24, 2, 'APTIC-L', '302232714_27.jpg', 0, 0, 0, 'SYRUP\r\nCyproheptadine HCI\r\nTricholine Citrate', 'Loss of appetite, weight loss, anorexia, nervosa\r\n& as an adjunct to anti tubecular & antiretroviral\r\nregimens for weight gain. Children suffering\r\nfrom anaemia, liver ordigestive disorder.', 0, 'APLTIC-L', '', 'Loss of appetite, weight loss, anorexia, nervosa\r\n& as an adjunct to anti tubecular & antiretroviral\r\nregimens for weight gain. Children suffering\r\nfrom anaemia, liver ordigestive disorder.', 1),
(27, 24, 2, 'AP2 PLUS', '902630778_55.jpg', 0, 0, 0, 'SYRUP\r\nAceclofenac 50 MG +\r\nParacetamol 125 MG', 'Mild to moderate pain including headache\r\nmigraine, neuralgia, toothache, sore\r\nthroat, aches, and pains, also\r\nuse as antipyretic.', 0, '', 'Mild to moderate pain including headache\r\nmigraine, neuralgia, toothache, sore\r\nthroat, aches, and pains, also\r\nuse as antipyretic.', '', 1),
(28, 24, 2, 'Cypo-Lectin', '720926512_26.jpg', 0, 0, 0, 'Cyproheptadine HCI\r\nTricholine Citrate', 'Loss of appetite, weight loss, anorexia, nervosa\r\n& as an adjunet to anti tubecular & anti retroviral\r\nregimens for weight gain. Children suffering\r\nfrom anaemia, liver ordigestivre dis order.', 0, 'Cyproheptadine HCI\r\nTricholine Citrate', 'Loss of appetite, weight loss, anorexia, nervosa\r\n& as an adjunet to anti tubecular & anti retroviral\r\nregimens for weight gain. Children suffering\r\nfrom anaemia, liver ordigestivre dis order.', 'Loss of appetite, weight loss, anorexia, nervosa\r\n& as an adjunet to anti tubecular & anti retroviral\r\nregimens for weight gain. Children suffering\r\nfrom anaemia, liver ordigestivre dis order.', 1),
(29, 24, 2, 'D2NZYME', '512419104_25.jpg', 0, 0, 0, 'Syrup\r\nPepsin, Papain & Vitamin\r\nB-Complex Syrup', 'Gastric Discomfort & Indigestion .', 0, 'Syrup\r\nPepsin, Papain & Vitamin\r\nB-Complex Syrup', 'Gastric Discomfort & Indigestion .', 'Syrup\r\nPepsin, Papain & Vitamin\r\nB-Complex Syrup', 1),
(30, 24, 2, 'EPTIZER', '342084611_24.jpg', 0, 0, 0, 'Syrup\r\nA Unique Appezer\r\nand Digesve', 'Loss of appetite, weight loss, anorexia, nervosa\r\n& as an adjunct to anti tubecular & antiretroviral\r\nregimens for weight gain. Children suffering\r\nfrom anaemia, liver ordigestive disorder.', 0, 'Loss of appetite, weight loss, anorexia, nervosa\r\n& as an adjunct to anti tubecular & antiretroviral\r\nregimens for weight gain. Children suffering\r\nfrom anaemia, liver ordigestive disorder.', '', 'Loss of appetite, weight loss, anorexia, nervosa\r\n& as an adjunct to anti tubecular & antiretroviral\r\nregimens for weight gain. Children suffering\r\nfrom anaemia, liver ordigestive disorder.', 1),
(31, 24, 2, 'HUNGERCIP', '498826752_23.jpg', 0, 0, 0, 'Syrup\r\nSyrup\r\nCyproheptadine HCI\r\nTricholine Citrate', 'Loss of appetite, weight loss, anorexia, nervosa\r\n& as an adjunct to anti tubecular & antiretroviral\r\nregimens for weight gain. Children suffering\r\nfrom anaemia, liver ordigestive disorder.', 0, 'Hungercip', '', 'Hunger, increase eating food power', 1),
(32, 24, 2, 'MBLIV', '355598403_22.jpg', 0, 0, 0, 'Syrup\r\nLiver Tonic', 'Liver disorder, jaundice, poor body\r\nmetabolism, poor digestion and cirrhosis.', 0, 'Liver Tonic', '', 'Liver Tonic mbliv', 1),
(33, 24, 2, 'MBVIT', '655963655_21.jpg', 0, 0, 0, 'Syrup \r\nMulti Vitamin', 'Pregnancy & lactation.\r\nAnaemia & vitamins deciencies.\r\nWeight loss, weakness & lack of energy.\r\nAllergic reactions.\r\nHealthy nails skin & hair.', 0, 'Multi Vitamin', 'Pregnancy & lactation.\r\nAnaemia & vitamins deciencies.\r\nWeight loss, weakness & lack of energy.\r\nAllergic reactions.\r\nHealthy nails skin & hair.', 'Multi Vitamin , stop hair fall, increase your power', 1),
(34, 24, 2, 'MbNZYME', '669040577_20.jpg', 0, 0, 0, 'A Unique Degesve Enzyme', 'Gastric Discomfort & Indigestion .\r\nA Unique Degesve Enzyme', 0, 'A Unique Degesve Enzyme', '', 'A Unique Degesve Enzyme, hungry, power', 1),
(35, 24, 2, 'MBDRYL', '881782510_19.jpg', 0, 0, 0, 'Cough Syrup', 'Productive Cough associated\r\nwith allergic rhinitis', 0, 'cough syrup', 'Productive Cough associated\r\nwith allergic rhinitis', 'cough syrup fever cold', 1),
(36, 24, 2, 'MBKUFF', '507832070_18.jpg', 0, 0, 0, 'Cough Syrup', 'Productive Cough associated\r\nwith allergic rhinitis', 0, '', 'Productive Cough associated\r\nwith allergic rhinitis', 'fever cold cough', 1),
(37, 24, 2, 'MBLIV-DS', '230633823_17.jpg', 0, 0, 0, 'Syrup\r\nLiver Tonic', 'Liver disorder, jaundice, poor body\r\nmetabolism, poor digestion and cirrhosis.', 0, '', 'Liver disorder, jaundice, poor body\r\nmetabolism, poor digestion and cirrhosis.', '', 1),
(38, 24, 2, 'MBRON XT', '969158434_16.jpg', 0, 0, 0, 'Ferric Ammonium Citrate, Folic Acid,\r\nVitamin B12 Syrup', 'Iron deciency Anaemia, Anaemia of\r\nPregnancy & Lactation, General\r\nweakness Lack of appetite &\r\nRun down conditions', 0, 'Ferric Ammonium Citrate, Folic Acid,\r\nVitamin B12 Syrup', 'Iron deciency Anaemia, Anaemia of\r\nPregnancy & Lactation, General\r\nweakness Lack of appetite &\r\nRun down conditions', '', 1),
(39, 24, 2, 'MBHEMOFER', '733753316_15.jpg', 0, 0, 0, 'Ferric Ammonium Citrate, Folic Acid,\r\nVitamin B12 Syrup', 'Iron deciency Anaemia, Anaemia of\r\nPregnancy & Lactation, General\r\nweakness Lack of appetite &\r\nRun down conditions', 0, 'Ferric Ammonium Citrate, Folic Acid,\r\nVitamin B12 Syrup', '', '', 1),
(40, 24, 2, 'MBFER XT', '170894048_14.jpg', 0, 0, 0, 'Ferric Ammonium Citrate, Folic Acid,\r\nVitamin B12 Syrup', 'Iron deciency Anaemia, Anaemia of\r\nPregnancy & Lactation, General\r\nweakness Lack of appetite &\r\nRun down conditions', 0, 'Ferric Ammonium Citrate,  syrup', '', '', 1),
(41, 24, 2, 'MUCEF', '902586493_13.jpg', 0, 0, 0, 'Cefixime 50 MG', 'Indicated for the treatment of\r\notitis media, U.T.I., tonsillitis,\r\nPharyngitis, bronchitis.', 0, '', 'Indicated for the treatment of\r\notitis media, U.T.I., tonsillitis,\r\nPharyngitis, bronchitis.', '', 1),
(42, 24, 2, 'Muvit', '644567323_12.jpg', 0, 0, 0, 'Multivitamin Syrup', 'Pregnancy & lactation.\r\nAnaemia & vitamins deciencies.\r\nWeight loss, weakness & lack of energy.\r\nAllergic reactions.\r\nHealthy nails skin & hair.', 0, '', 'Pregnancy & lactation.\r\nAnaemia & vitamins deciencies.\r\nWeight loss, weakness & lack of energy.\r\nAllergic reactions.\r\nHealthy nails skin & hair.', '', 1),
(43, 24, 2, 'P2NZYME', '142323255_11.jpg', 0, 0, 0, 'Pepsin, Papain & Vitamin\r\nB-Complex Syrup', 'Gastric Discomfort & Indigestion .', 0, '', '', '', 1),
(44, 24, 2, 'ROLDOT MPS', '930532069_10.jpg', 0, 0, 0, 'Antacid Anflatulent\r\n& Demulcent', 'Heartburn, Peptic Ulcer,\r\nGastroesophageal reux disease', 0, '', '', '', 1),
(45, 24, 2, 'TINGER', '735440943_9.jpg', 0, 0, 0, 'Pepsin, Papain and Vitamin\r\nB-Complex Syrup', 'Gastric Discomfort & Indigestion', 0, '', '', '', 1),
(46, 24, 2, 'HEMINCIP', '128596464_8.jpg', 0, 0, 0, 'Work on it', 'Working', 0, '', '', '', 1),
(47, 23, 5, 'INAVIT', '793405990_7.jpg', 0, 0, 0, 'work on it', 'working', 0, '', '', '', 1),
(48, 23, 5, 'INLIV-DS', '454187865_6.jpg', 21, 12, 0, 'Syrup', 'Gastric Discomfort & Indigestion', 0, '', '', '', 1),
(49, 23, 5, 'HEMINPURE', '706857034_5.jpg', 100, 80, 40, 'work on it', 'under progress', 0, '', '', '', 1),
(50, 23, 5, 'A-NZYME', '940433987_4.jpg', 90, 80, 30, 'work on it', 'underprogress', 0, '', '', '', 1),
(51, 23, 5, 'IRALIV', '529901711_3.jpg', 100, 80, 40, 'under progress', 'work on it', 0, '', '', '', 1),
(52, 24, 2, 'NANZYME', '949022986_1.jpg', 90, 80, 30, 'underprogress', 'work on it', 0, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `mobile`, `added_on`) VALUES
(2, 'shuaib', 'shuaib', 'shuaib@gmail.com', '1234567890', '2020-10-14 19:28:11'),
(3, 'shan', 'asd', 'sha@gmail.com', '987678909', '2021-02-04 06:16:58'),
(8, '', 'asde', 'sarim@gmail.com', '1234567890', '2021-02-05 04:03:09'),
(9, '', 'asde', 'sarim12@gmail.com', '1234567890', '2021-02-05 04:19:16'),
(10, 'asad', 'asdw', 'asad@gmail.com', '9876543210', '2021-02-05 04:35:43'),
(11, 'shahwaz', '9152520059', 'mshan4aci@gmail.com', '9152520059', '2021-02-05 05:46:03'),
(12, 'ilyas', '9267448338', 'ilyas@gmail.com', '9267448338', '2021-02-11 03:59:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
