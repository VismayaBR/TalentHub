-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 02:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talent_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_tb`
--

CREATE TABLE `cat_tb` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_tb`
--

INSERT INTO `cat_tb` (`cat_id`, `name`) VALUES
(1, 'drawings_and_paintings'),
(2, 'craftworks'),
(3, 'food_items'),
(4, 'stiching_and_wearings'),
(5, 'photographs');

-- --------------------------------------------------------

--
-- Table structure for table `comment_tb`
--

CREATE TABLE `comment_tb` (
  `cmnt_id` int(11) NOT NULL,
  `msg_id` int(20) NOT NULL,
  `reg_id` int(20) NOT NULL,
  `cus_reg_id` int(20) NOT NULL,
  `comment` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_tb`
--

INSERT INTO `comment_tb` (`cmnt_id`, `msg_id`, `reg_id`, `cus_reg_id`, `comment`) VALUES
(1, 1, 0, 1, 'ok'),
(2, 1, 0, 1, 'edaa'),
(3, 8, 0, 1, 'hey\r\n'),
(4, 9, 0, 2, 'csadasd');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg_tb`
--

CREATE TABLE `customer_reg_tb` (
  `reg_id` int(40) NOT NULL,
  `login_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_reg_tb`
--

INSERT INTO `customer_reg_tb` (`reg_id`, `login_id`, `name`, `gender`, `email`, `mobile`, `address`, `status`) VALUES
(1, 3, 'akshay', 'male', 'ak@gmail.com', '7894562310', 'scsczdsc', 1),
(2, 5, 'naifa', 'female', 'naifa@gmail.com', '9946717015', 'kallingal house', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department_tb`
--

CREATE TABLE `department_tb` (
  `department_id` int(11) NOT NULL,
  `dat` date NOT NULL,
  `department` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dept_tb`
--

CREATE TABLE `dept_tb` (
  `dept_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_tb`
--

INSERT INTO `dept_tb` (`dept_id`, `name`) VALUES
(1, 'BCom'),
(2, 'BSC. COMPUTER SCIENCE'),
(3, 'BTHM'),
(4, 'BBA'),
(5, 'BSC PSYCHOLOGY'),
(6, 'BA ENGLISH');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `login_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'abcd', '123', 'student'),
(3, 'akshay', '111', 'customer'),
(4, 'harshi', '54321', 'student'),
(5, 'sadath', '12345', 'customer'),
(8, 'maneesh', '123', 'student'),
(9, 'anu', '123', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `order_product_tb`
--

CREATE TABLE `order_product_tb` (
  `msg_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `message` varchar(100) NOT NULL,
  `cust_reg_id` int(40) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_product_tb`
--

INSERT INTO `order_product_tb` (`msg_id`, `reg_id`, `name`, `message`, `cust_reg_id`, `product_id`, `status`) VALUES
(1, 2, 'akshay', 'adnjkad', 1, 1, 1),
(2, 1, 'sadath', 'i need this paintings', 2, 2, 1),
(3, 1, 'sadath', 'hii', 2, 2, 1),
(4, 1, 'MANEESH', 'LKDHFKSAGDF', 2, 2, 1),
(5, 1, 'we', 'zxcv', 1, 2, 1),
(6, 2, 'asd', 'qwwertyuiop', 1, 1, 0),
(7, 6, 'aaaaaaaaa', 'aaaaaaad', 1, 3, 0),
(8, 4, 'anu', 'hwllo', 1, 4, 1),
(9, 5, 'anu', 'dscdxc', 2, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE `product_tb` (
  `product_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `reg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`product_id`, `cat_id`, `name`, `image`, `reg_id`) VALUES
(1, 3, 'food', 'download (2).jpg', 2),
(2, 1, 'abc', 'ambulance.jpg', 1),
(3, 3, 'vehicle', 'downloadw.jpg', 6),
(4, 4, 'food', 'download n.jpg', 4),
(5, 2, 'kasargod', 'download n.jpg', 4),
(6, 3, 'food', 'medi.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `request_service_tb`
--

CREATE TABLE `request_service_tb` (
  `ser_id` int(11) NOT NULL,
  `service` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_service_tb`
--

INSERT INTO `request_service_tb` (`ser_id`, `service`) VALUES
(1, 'nss'),
(2, 'paliative'),
(3, 'blood bank');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `department`) VALUES
(1, 'IT EXPERTS', 'BSC. COMPUTER SCIENCE'),
(2, 'TUTION CS', 'BSC. COMPUTER SCIENCE'),
(3, 'STUDENT COUNCILERS', 'BSC PSYCHOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `service_request_tb`
--

CREATE TABLE `service_request_tb` (
  `req_id` int(11) NOT NULL,
  `ser_id` int(40) NOT NULL,
  `reg_id` int(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_request_tb`
--

INSERT INTO `service_request_tb` (`req_id`, `ser_id`, `reg_id`, `status`) VALUES
(1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_reg_tb`
--

CREATE TABLE `student_reg_tb` (
  `login_id` int(11) NOT NULL,
  `reg_id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `blood_group` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_reg_tb`
--

INSERT INTO `student_reg_tb` (`login_id`, `reg_id`, `name`, `address`, `blood_group`, `email`, `mobile`, `gender`, `department`, `year`, `service`, `status`) VALUES
(2, 1, 'abcd', 'abcdefgh', 'AB+', 'abcd@gmail.com', '1234567890', 'male', 'Bsc maths', '1', 'nss', 1),
(4, 2, 'harsheena', 'thuppilikkadan house', 'A+', 'harsheena@gmail.com', '8075911165', 'female', 'cs', '3', 'nss', 1),
(8, 4, 'maneesh', 'aaaaaaaaaaa', '', 'g@gmail.com', '4444223333', 'male', '2E', '3', 'asdadads', 1),
(9, 5, 'anu', 'asads', '', 'anu@gmail.com', '1234565215', 'female', 'bsc physics', '3', 'Nss', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_tb`
--

CREATE TABLE `student_tb` (
  `student_id` int(11) NOT NULL,
  `login_id` int(250) NOT NULL,
  `yoa` varchar(150) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `admn` varchar(200) NOT NULL,
  `roll` varchar(200) NOT NULL,
  `uid` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `pa` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tb`
--

INSERT INTO `student_tb` (`student_id`, `login_id`, `yoa`, `sem`, `department`, `admn`, `roll`, `uid`, `name`, `sex`, `pa`, `timestamp`) VALUES
(23711, 190, '2015', 'S2CS', 'EC', '475/15', 'EC 15 A01', 'EC15A01', 'AAKASH V GOPAL', 'M', '', '2021-02-18 07:21:41'),
(23712, 191, '2015', 'S2CS', 'EC', '177/15', 'EC 15 A02', 'EC15A02', 'ABHAYA P S', 'F', '', '2021-02-18 07:21:41'),
(23713, 192, '2015', 'S2CS', 'EC', '423/15', 'EC 15 A03', 'EC15A03', 'ABHIMANYU A', 'M', '', '2021-02-18 07:21:41'),
(23714, 193, '2015', 'S2CS', 'EC', '19/15', 'EC 15 A04', 'EC15A04', 'AISWARYA  C', 'F', '', '2021-02-18 07:21:41'),
(23715, 194, '2015', 'S2CS', 'EC', '64/15', 'EC 15 A05', 'EC15A05', 'AKHIL K AJITH', 'M', '', '2021-02-18 07:21:41'),
(23716, 195, '2015', 'S2CS', 'EC', '69/15', 'EC 15 A06', 'EC15A06', 'ALIDA SUNIL', 'F', '', '2021-02-18 07:21:42'),
(23717, 196, '2015', 'S2CS', 'EC', '65/15', 'EC 15 A07', 'EC15A07', 'ANANDHAPADMANABHAN T S', 'M', '', '2021-02-18 07:21:42'),
(23718, 197, '2015', 'S2CS', 'EC', '329/15', 'EC 15 A08', 'EC15A08', 'ANANDHU R', 'M', '', '2021-02-18 07:21:42'),
(23719, 198, '2015', 'S2CS', 'EC', '286/15', 'EC 15 A09', 'EC15A09', 'ANISH G', 'M', '', '2021-02-18 07:21:42'),
(23720, 199, '2015', 'S2CS', 'EC', '127/15', 'EC 15 A10', 'EC15A10', 'ANJANA KRISHNA', 'F', '', '2021-02-18 07:21:42'),
(23721, 200, '2015', 'S2CS', 'EC', '501/15', 'EC 15 A11', 'EC15A11', 'ANU ANNA ANTONY', 'F', '', '2021-02-18 07:21:42'),
(23722, 201, '2015', 'S2CS', 'EC', '87/15', 'EC 15 A12', 'EC15A12', 'ANUJA M FRANCIS', 'F', '', '2021-02-18 07:21:42'),
(23723, 202, '2015', 'S2CS', 'EC', '180/15', 'EC 15 A13', 'EC15A13', 'ANUPAMA S', 'F', '', '2021-02-18 07:21:42'),
(23724, 203, '2015', 'S2CS', 'EC', '416/15', 'EC 15 A14', 'EC15A14', 'ARATHY KRISHNA A', 'F', '', '2021-02-18 07:21:42'),
(23725, 204, '2015', 'S2CS', 'EC', '448/15', 'EC 15 A15', 'EC15A15', 'ASHLEY MARY JACOB', 'F', '', '2021-02-18 07:21:43'),
(23726, 205, '2015', 'S2CS', 'EC', '73/15', 'EC 15 A16', 'EC15A16', 'ASISH JOHN JOSHY', 'M', '', '2021-02-18 07:21:43'),
(23727, 206, '2015', 'S2CS', 'EC', '184/15', 'EC 15 A17', 'EC15A17', 'ASWATHY S', 'F', '', '2021-02-18 07:21:43'),
(23728, 207, '2015', 'S2CS', 'EC', '102/15', 'EC 15 A18', 'EC15A18', 'ASWATHY SURESH', 'F', '', '2021-02-18 07:21:43'),
(23729, 208, '2015', 'S2CS', 'EC', '011/15', 'EC 15 A19', 'EC15A19', 'ATHIRA ARUN', 'F', '', '2021-02-18 07:21:43'),
(23730, 209, '2015', 'S2CS', 'EC', '461/15', 'EC 15 A20', 'EC15A20', 'ATHIRA GOPINATHA KURUP', 'F', '', '2021-02-18 07:21:43'),
(23731, 210, '2015', 'S2CS', 'EC', '171/15', 'EC 15 A21', 'EC15A21', 'ATHULYA R SASI', 'F', '', '2021-02-18 07:21:43'),
(23732, 211, '2015', 'S2CS', 'EC', '373/15', 'EC 15 A22', 'EC15A22', 'BADHIRA BASHEER', 'F', '', '2021-02-18 07:21:43'),
(23733, 212, '2015', 'S2CS', 'EC', '439/15', 'EC 15 A23', 'EC15423', 'BIPIN B', 'M', '', '2021-02-18 07:21:43'),
(23734, 213, '2015', 'S2CS', 'EC', '426/15', 'EC 15 A24', 'EC15A24', 'CHIPPY VISWAN', 'F', '', '2021-02-18 07:21:43'),
(23735, 214, '2015', 'S2CS', 'EC', '345/15', 'EC 15 A25', 'EC15A25', 'DEEPAK D', 'M', '', '2021-02-18 07:21:44'),
(23736, 215, '2015', 'S2CS', 'EC', '31/15', 'EC 15 A26', 'EC15A26', 'DEVIKA V NAIR', 'F', '', '2021-02-18 07:21:44'),
(23737, 216, '2015', 'S2CS', 'EC', '85/15', 'EC 15 A27', 'EC15A27', 'EMIL JAYANTH LAL', 'M', '', '2021-02-18 07:21:44'),
(23738, 217, '2015', 'S2CS', 'EC', '469/15', 'EC 15 A28', 'EC15A28', 'EVELIN THERESA SHELLY', 'F', '', '2021-02-18 07:21:44'),
(23739, 218, '2015', 'S2CS', 'EC', '503/15', 'EC 15 A29', 'EC15A29', 'FEMI MARIA SEBASTIAN', 'F', '', '2021-02-18 07:21:44'),
(23740, 219, '2015', 'S2ME', 'EC', '162/15', 'EC 15 A30', 'EC15A30', 'GITANJALY J S', 'F', '', '2021-02-18 07:21:44'),
(23741, 220, '2015', 'S2ME', 'EC', '105/15', 'EC 15 A31', 'EC15A31', 'GOKUL G PILLAI', 'M', '', '2021-02-18 07:21:44'),
(23742, 221, '2015', 'S2ME', 'EC', '142/15', 'EC 15 A32', 'EC15A32', 'GOPIKA G NAIR', 'F', '', '2021-02-18 07:21:44'),
(23743, 222, '2015', 'S2ME', 'EC', '74/15', 'EC 15 A33', 'EC15A33', 'GOPIKA M', 'F', '', '2021-02-18 07:21:44'),
(23744, 223, '2015', 'S2ME', 'EC', '42/15', 'EC 15 A34', 'EC15A34', 'IBNU NAZEER', 'F', '', '2021-02-18 07:21:44'),
(23745, 224, '2015', 'S2ME', 'EC', '88/15', 'EC 15 A35', 'EC15A35', 'INDU TERESE JOS', 'F', '', '2021-02-18 07:21:45'),
(23746, 225, '2015', 'S2ME', 'EC', '451/15', 'EC 15 A36', 'EC15A36', 'IRINE MARY THOMAS', 'F', '', '2021-02-18 07:21:45'),
(23747, 226, '2015', 'S2ME', 'EC', '173/15', 'EC 15 A37', 'EC15A37', 'JAYASREE ANIL', 'F', '', '2021-02-18 07:21:45'),
(23748, 227, '2015', 'S2ME', 'EC', '135/15', 'EC 15 A38', 'EC15A38', 'JESMI RACHEL JACOB', 'F', '', '2021-02-18 07:21:45'),
(23749, 228, '2015', 'S2ME', 'EC', '109/15', 'EC 15 A39', 'EC15A39', 'JIPSA ABRAHAM', 'F', '', '2021-02-18 07:21:45'),
(23750, 229, '2015', 'S2ME', 'EC', '001/15', 'EC 15 A40', 'EC15A40', 'JISHNU JAYAPRAKASH', 'M', '', '2021-02-18 07:21:45'),
(23751, 230, '2015', 'S2ME', 'EC', '140/15', 'EC 15 A41', 'EC15A41', 'JOVAN AUSTIN', 'M', '', '2021-02-18 07:21:45'),
(23752, 231, '2015', 'S2ME', 'EC', '462/15', 'EC 15 A42', 'EC15A42', 'JYOTHISHA PRADEESH A C', 'F', '', '2021-02-18 07:21:45'),
(23753, 232, '2015', 'S2ME', 'EC', '445/15', 'EC 15 A43', 'EC15A43', 'KARTHIKA UMESH', 'F', '', '2021-02-18 07:21:45'),
(23754, 233, '2015', 'S2ME', 'EC', '75/15', 'EC 15 A44', 'EC15A44', 'KEERTHI KRISHNAN N', 'F', '', '2021-02-18 07:21:45'),
(23755, 234, '2015', 'S2ME', 'EC', '481/15', 'EC 15 A45', 'EC15A45', 'LEKSHMI MURALI', 'F', '', '2021-02-18 07:21:45'),
(23756, 235, '2015', 'S2ME', 'EC', '61/15', 'EC 15 A46', 'EC15A46', 'LEKSHMI R NATH', 'F', '', '2021-02-18 07:21:46'),
(23757, 236, '2015', 'S2ME', 'EC', '482/15', 'EC 15 A47', 'EC15A47', 'LENITTA ELZA EASAW', 'F', '', '2021-02-18 07:21:46'),
(23758, 237, '2015', 'S2ME', 'EC', '14/15', 'EC 15 A48', 'EC15A48', 'MARIAM ABRAHAM', 'F', '', '2021-02-18 07:21:46'),
(23759, 238, '2015', 'S2ME', 'EC', '175/15', 'EC 15 A49', 'EC15A49', 'MUHAMMAD SHIBILI M H', 'M', '', '2021-02-18 07:21:46'),
(23760, 239, '2015', 'S2ME', 'EC', '291/15', 'EC 15 A50', 'EC15A50', 'NEENU SOMY', 'F', '', '2021-02-18 07:21:46'),
(23761, 240, '2015', 'S2ME', 'EC', '90/15', 'EC 15 A51', 'EC15A51', 'NIKHILA MARY SAM', 'F', '', '2021-02-18 07:21:46'),
(23762, 241, '2015', 'S2ME', 'EC', '115/15', 'EC 15 A52', 'EC15A52', 'NIRMALA BABU', 'F', '', '2021-02-18 07:21:46'),
(23763, 242, '2015', 'S2ME', 'EC', '280/15', 'EC 15 A53', 'EC15A53', 'PRATHIBHA T', 'F', '', '2021-02-18 07:21:47'),
(23764, 243, '2015', 'S2ME', 'EC', '67/15', 'EC 15 A54', 'EC15A54', 'RAHUL CHANDRAN', 'M', '', '2021-02-18 07:21:47'),
(23765, 244, '2015', 'S2ME', 'EC', '152/15', 'EC 15 A55', 'EC15A55', 'RIFANA RASHEED', 'F', '', '2021-02-18 07:21:47'),
(23766, 245, '2015', 'S2ME', 'EC', '159/15', 'EC 15 A56', 'EC15A56', 'SHALLU GEORGE', 'F', '', '2021-02-18 07:21:47'),
(23767, 246, '2015', 'S2ME', 'EC', '28/15', 'EC 15 A57', 'EC15A57', 'SHINON SAJI JACOB MAVELIL', 'M', '', '2021-02-18 07:21:47'),
(23768, 247, '2015', 'S2ME', 'EC', '55/15', 'EC 15 A58', 'EC15A58', 'STEFEENA VARGHESE', 'F', '', '2021-02-18 07:21:47'),
(23769, 248, '2015', 'S2ME', 'EC', '72/15', 'EC 15 A59', 'EC15A59', 'SUNI SARA VARKEY', 'F', '', '2021-02-18 07:21:47'),
(23770, 249, '2015', 'S2ME', 'EC', '440/15', 'EC 15 A60', 'EC15A60', 'VANDANA M', 'F', '', '2021-02-18 07:21:47'),
(23771, 250, '2015', 'S2ME', 'EC', '116/15', 'EC 15 B01', 'EC15B01', 'ABHILASH J', 'M', '', '2021-02-18 07:21:47'),
(23772, 251, '2015', 'S2ME', 'EC', '425/15', 'EC 15 B02', 'EC15B02', 'ABHINAND T A', 'M', '', '2021-02-18 07:21:48'),
(23773, 252, '2015', 'S2ME', 'EC', '411/15', 'EC 15 B03', 'EC15B04', 'ABHIRAMI LALSINGH', 'F', '', '2021-02-18 07:21:48'),
(23774, 253, '2015', 'S2ME', 'EC', '113/15', 'EC 15 B04', 'EC15B04', 'AKHIL BABU', 'M', '', '2021-02-18 07:21:48'),
(23775, 254, '2015', 'S2ME', 'EC', '108/15', 'EC 15 B05', 'EC15B05', 'AMRUTHA B', 'F', '', '2021-02-18 07:21:48'),
(23776, 255, '2015', 'S2ME', 'EC', '166/15', 'EC 15 B06', 'EC15B06', 'ANAGHA S', 'F', '', '2021-02-18 07:21:48'),
(23777, 256, '2015', 'S2ME', 'EC', '79/15', 'EC 15 B07', 'EC15B07', 'ANANDHAKRISHNAN M R', 'M', '', '2021-02-18 07:21:48'),
(23778, 257, '2015', 'S2ME', 'EC', '151/15', 'EC 15 B08', 'EC15B08', 'ANGEL THERESA JOSE', 'F', '', '2021-02-18 07:21:48'),
(23779, 258, '2015', 'S2ME', 'EC', '485/15', 'EC 15 B09', 'EC15B09', 'ANOOP RAJ', 'M', '', '2021-02-18 07:21:48'),
(23780, 259, '2015', 'S2ME', 'EC', '76/15', 'EC 15 B10', 'EC15B10', 'ANU MARIAM ALEX', 'F', '', '2021-02-18 07:21:48'),
(23781, 260, '2015', 'S2ME', 'EC', '176/15', 'EC 15 B11', 'EC15B11', 'ARATHY P KUMAR', 'F', '', '2021-02-18 07:21:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_tb`
--
ALTER TABLE `cat_tb`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comment_tb`
--
ALTER TABLE `comment_tb`
  ADD PRIMARY KEY (`cmnt_id`);

--
-- Indexes for table `customer_reg_tb`
--
ALTER TABLE `customer_reg_tb`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `department_tb`
--
ALTER TABLE `department_tb`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `dept_tb`
--
ALTER TABLE `dept_tb`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `order_product_tb`
--
ALTER TABLE `order_product_tb`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `request_service_tb`
--
ALTER TABLE `request_service_tb`
  ADD PRIMARY KEY (`ser_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_request_tb`
--
ALTER TABLE `service_request_tb`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `student_reg_tb`
--
ALTER TABLE `student_reg_tb`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `student_tb`
--
ALTER TABLE `student_tb`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_tb`
--
ALTER TABLE `cat_tb`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment_tb`
--
ALTER TABLE `comment_tb`
  MODIFY `cmnt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_reg_tb`
--
ALTER TABLE `customer_reg_tb`
  MODIFY `reg_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department_tb`
--
ALTER TABLE `department_tb`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dept_tb`
--
ALTER TABLE `dept_tb`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_product_tb`
--
ALTER TABLE `order_product_tb`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request_service_tb`
--
ALTER TABLE `request_service_tb`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_request_tb`
--
ALTER TABLE `service_request_tb`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_reg_tb`
--
ALTER TABLE `student_reg_tb`
  MODIFY `reg_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_tb`
--
ALTER TABLE `student_tb`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23783;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
