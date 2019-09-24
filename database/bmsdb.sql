-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 12:39 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvedbudget`
--

CREATE TABLE `approvedbudget` (
  `Item` int(5) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `IFS_AccountCode` varchar(55) NOT NULL,
  `ProjectStatus` tinyint(1) NOT NULL,
  `CostCenterID` int(255) NOT NULL,
  `ProposedBudgetAmount` int(20) NOT NULL,
  `ApprovedCapitalAmount` int(20) NOT NULL,
  `ApprovedReccurentAmount` int(20) NOT NULL,
  `FinancialYear` varchar(8) NOT NULL,
  `FY_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `budget_item`
--

CREATE TABLE `budget_item` (
  `id` int(11) NOT NULL,
  `ItemID` varchar(200) NOT NULL,
  `Financial_year` varchar(250) NOT NULL,
  `BudgetName` varchar(250) NOT NULL,
  `CostCenter` varchar(250) NOT NULL,
  `AccountCode` varchar(250) NOT NULL,
  `Budgetline` varchar(250) NOT NULL,
  `Activity` varchar(250) NOT NULL,
  `Amount` varchar(250) NOT NULL,
  `Notes` varchar(250) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget_item`
--

INSERT INTO `budget_item` (`id`, `ItemID`, `Financial_year`, `BudgetName`, `CostCenter`, `AccountCode`, `Budgetline`, `Activity`, `Amount`, `Notes`, `PostingDate`) VALUES
(1, '', '2018/2019', 'Capital Budget', '150', '001.109002.1', 'Computer Equipment', '   Printer', '80000000', 'two printer', '2019-06-10 20:15:55'),
(2, '', '2018/2019', 'Capital Budget', '116', '001.101015.1', 'Computer Equipment', '   PCs', '100,000,000', '50 PCs', '2019-06-10 20:26:28'),
(3, '', '2018/2019', 'Capital Budget', '116', '001.109002.1', 'Computer Equipment', '   Printers', '100,000,000', '10 pcs', '2019-06-10 20:28:57'),
(4, '', '2018/2019', 'Capital Budget', '116', '001.109002.1', 'Computer Equipment', '   Scanners', '18,000,000	', '12 pcs', '2019-06-10 20:30:39'),
(5, '', '2018/2019', 'Capital Budget', '116', '001.109002.1', 'Computer Equipment', '   Laptops', '32,000,000', '8pcs', '2019-06-10 20:32:04'),
(7, ' 120', '2018/2019', 'Capital Budget', '137', '001.101015.1', 'infrastructure  Construction and renovation ', 'construction materials ', '200000', 'labour payment for toilet renovation in accounting department level 5', '2019-06-17 13:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `budget_line`
--

CREATE TABLE `budget_line` (
  `id` int(11) NOT NULL,
  `Fy` varchar(250) NOT NULL,
  `BudgetName` varchar(250) NOT NULL,
  `CostCenter` varchar(250) NOT NULL,
  `AccountName` varchar(225) NOT NULL,
  `AccountCode` varchar(250) NOT NULL,
  `ApprovedAmount` varchar(250) NOT NULL,
  `addedON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget_line`
--

INSERT INTO `budget_line` (`id`, `Fy`, `BudgetName`, `CostCenter`, `AccountName`, `AccountCode`, `ApprovedAmount`, `addedON`) VALUES
(2, '2018/2019', 'Capital Budget', '101', 'Computer Equipment', '001.109002.1', '500,000,000', '2019-06-09 17:30:01'),
(3, '2018/2019', 'Capital Budget', '116', 'infrastructure  Construction and renovation ', '001.109002.6', '8,470,000,000', '2019-06-10 02:48:50'),
(4, '2018/2019', 'Capital Budget', '156', 'IT Reated Projects', '001.101015.1', '150,000,000', '2019-06-10 03:00:35'),
(5, '2018/2019', 'Recurrent  Budget', '114', '', '', '', '2019-06-10 06:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `capitalbudget`
--

CREATE TABLE `capitalbudget` (
  `id` int(11) NOT NULL,
  `BudgetName` varchar(200) NOT NULL,
  `FinanicalYear` varchar(200) NOT NULL,
  `BugetType` varchar(200) NOT NULL,
  `CostCenterCode` varchar(200) NOT NULL,
  `CostCenter` varchar(200) NOT NULL,
  `AccountCode` varchar(200) NOT NULL,
  `BudgetLine` varchar(200) NOT NULL,
  `Budget_Item_One` varchar(200) NOT NULL,
  `Budget_Item_Two` varchar(200) NOT NULL,
  `Budget_Item_Three` varchar(200) NOT NULL,
  `BudgetNotes` varchar(200) NOT NULL,
  `Attachment_one` varchar(200) NOT NULL,
  `Attachment_Two` varchar(200) NOT NULL,
  `proposedamount` varchar(200) NOT NULL,
  `approval_one` varchar(200) NOT NULL,
  `approval_two` varchar(200) NOT NULL,
  `Created_By` varchar(200) NOT NULL,
  `Created_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capitalbudget`
--

INSERT INTO `capitalbudget` (`id`, `BudgetName`, `FinanicalYear`, `BugetType`, `CostCenterCode`, `CostCenter`, `AccountCode`, `BudgetLine`, `Budget_Item_One`, `Budget_Item_Two`, `Budget_Item_Three`, `BudgetNotes`, `Attachment_one`, `Attachment_Two`, `proposedamount`, `approval_one`, `approval_two`, `Created_By`, `Created_Date`) VALUES
(1, 'local travel', '2018/2019', 'Capital Budget', '110', 'Medical', '001.109002.6', 'infrastructure  Construction and renovation ', 'transport fee', 'trip allowance ', 'medical allowance ', '              	\r\n              local traveling of the staff for medical department ', 'KISAALU GEOF.docx', 'KISAALU GEOF.docx', '50000000', 'Mataka Rogger', 'Atukude Millicent', 'Akello Esther', '2019-06-30 16:09:27'),
(2, 'staff travelling', '2018/2019', 'Capital Budget', '106', 'Human Resource', '001.109002.6', 'infrastructure  Construction and renovation ', 'oracle traing', 'board staff travelling ', '', '              	\r\n              staff travelling budge', 'notec.docx', '', '4500000', 'mr mataka rogess', 'akello', 'esther', '2019-07-02 10:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `costcenters`
--

CREATE TABLE `costcenters` (
  `costcenterID` int(255) NOT NULL,
  `cost_center_code` varchar(100) NOT NULL,
  `names` varchar(200) NOT NULL,
  `type` char(100) DEFAULT NULL,
  `approvedAmount` varchar(200) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costcenters`
--

INSERT INTO `costcenters` (`costcenterID`, `cost_center_code`, `names`, `type`, `approvedAmount`, `PostingDate`) VALUES
(9, '104', 'Audit', 'Department', '200,000,000,', '2019-06-09 11:20:12'),
(10, '105', 'SQA', 'Department', '98,000.000', '2019-06-09 11:20:12'),
(11, '106', 'Human Resource', 'Department', '4,000,000,000', '2019-06-09 11:20:12'),
(12, '108', 'Administrative Services', 'Department', '100,000,000', '2019-06-09 11:20:12'),
(13, '109', 'Catering', 'Division', '200,000,000', '2019-06-09 11:25:47'),
(15, '114', 'Economic Research', 'Department', '250,000,000', '2019-06-09 11:30:10'),
(16, '115', 'Accounts', 'Department', '800,000,000', '2019-06-09 11:31:16'),
(17, '116', 'IT OPERATIONS AND INFRASTRUCTURE', 'Department', '3,000,000,000', '2019-06-09 11:32:10'),
(18, '117', 'Commercial Banking', 'Department', '172,000,000', '2019-06-09 11:32:56'),
(19, '131', 'Mbarara Currency Center', 'Division', '960,000,000', '2019-06-09 11:34:27'),
(20, '136', 'EDA', 'Directirate', '152,000,000', '2019-06-09 11:35:05'),
(22, '138', 'EDF', 'Directirate', '16,200,000', '2019-06-09 11:36:13'),
(23, '140', 'EDR', 'Directirate', '310,000,000', '2019-06-09 11:37:31'),
(24, '149', 'EDRSM', 'Directirate', '60,000,000', '2019-06-09 11:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `DepNo` varchar(200) NOT NULL,
  `ISFCode` varchar(200) NOT NULL,
  `DeptName` varchar(200) NOT NULL,
  `DeptAccount` varchar(200) NOT NULL,
  `ApprovedAmount` varchar(200) NOT NULL,
  `createdON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `DepNo`, `ISFCode`, `DeptName`, `DeptAccount`, `ApprovedAmount`, `createdON`) VALUES
(6, '2012244', '45122', 'communication ', '85520741369', '80000000000', '2019-06-07 05:22:12'),
(7, '2012233', '1222002222023', 'IT', '012222455500032', '1320000000332', '2019-06-17 13:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `financial_year`
--

CREATE TABLE `financial_year` (
  `FY_id` int(11) NOT NULL,
  `FinancialYear` varchar(200) NOT NULL,
  `approvedAmount` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_year`
--

INSERT INTO `financial_year` (`FY_id`, `FinancialYear`, `approvedAmount`, `Status`, `createdDate`) VALUES
(1, '2017/201', '20000000000000', 'Closed', '2019-06-01 19:46:26'),
(2, '2016/201', '43000000000000', 'Closed', '2019-06-01 19:46:26'),
(3, '2016/2017', '200000000', 'Closed', '2019-06-01 19:46:37'),
(4, '2018/2019', '85400000000', 'Opened', '2019-06-02 04:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `projectname`
--

CREATE TABLE `projectname` (
  `ProjectName` varchar(255) NOT NULL,
  `ProjectId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `ProjectCode` varchar(200) NOT NULL,
  `ProjectName` varchar(200) NOT NULL,
  `ProjectManager` varchar(200) NOT NULL,
  `ProjectMembers` varchar(200) NOT NULL,
  `ProjectObjective` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `ExpectedDuration` varchar(200) NOT NULL,
  `EstimatedCost` varchar(200) NOT NULL,
  `BoardApproval` varchar(200) NOT NULL,
  `BoardConstraint` varchar(200) NOT NULL,
  `Department_Work_Plan` varchar(200) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `ProjectCode`, `ProjectName`, `ProjectManager`, `ProjectMembers`, `ProjectObjective`, `Description`, `ExpectedDuration`, `EstimatedCost`, `BoardApproval`, `BoardConstraint`, `Department_Work_Plan`, `createdOn`) VALUES
(1, '51244', 'complains Management System ', 'Mataka Roggers ', 'Mukuve Ronald', 'To Handle all employees or Staffs Complains  of Banks with in the bank', 'The system will handles all complains with  in the bank  of uganda ', ' 2 years and 3month ', '5420000000', 'yes', 'yes ', 'no ', '2019-07-01 14:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `project_team`
--

CREATE TABLE `project_team` (
  `id` int(11) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `Section` varchar(200) NOT NULL,
  `CostCenter` varchar(200) NOT NULL,
  `UserType` varchar(200) NOT NULL,
  `Role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_team`
--

INSERT INTO `project_team` (`id`, `FullName`, `Email`, `Phone`, `Section`, `CostCenter`, `UserType`, `Role`) VALUES
(1, 'Mukuve Norman', ' normanmuk12@bou.com', '0759753970', 'Medines  Store section ', 'Medical', 'Project Memebers', 'End User'),
(2, 'Atukunde Millicent', ' millyakud@bou.com', '0786798542', 'Money Vaildation and checking section ', 'Mbarara Currency Center', 'Project Memebers', 'Documenter');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `TransactionID` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `VendorName` varchar(255) NOT NULL,
  `TransactionDate` date NOT NULL,
  `BCF` varchar(255) NOT NULL,
  `LPO` varchar(255) DEFAULT NULL,
  `PAI` varchar(255) DEFAULT NULL,
  `Orginator` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Comments` varchar(255) DEFAULT NULL,
  `FinancialYear` varchar(8) NOT NULL,
  `Budget` int(11) DEFAULT NULL,
  `IFS_AccountCode` varchar(255) DEFAULT NULL,
  `Other` varchar(255) DEFAULT NULL,
  `ServiceCall` int(11) DEFAULT NULL,
  `RequisitionID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_type` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`, `postingDate`) VALUES
(1, 'bukeye', 'bukeye@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2019-07-01 13:58:18'),
(2, 'timo', 'timo@gmail.com', 'user', '202cb962ac59075b964b07152d234b70', '2019-07-01 13:58:18'),
(6, 'ivan', 'ivan@gmail.com', 'Budgeting Officer', '202cb962ac59075b964b07152d234b70', '2019-07-01 13:58:18'),
(7, 'eric', 'eric@gmail.com', 'Budget Viewer', '202cb962ac59075b964b07152d234b70', '2019-07-01 13:58:18'),
(8, 'nantume', 'nantu@gmail.com', 'Project Manager', '202cb962ac59075b964b07152d234b70', '2019-07-01 13:58:18'),
(9, 'doreen', 'doreen@gmail.com', 'Project Memebers', '202cb962ac59075b964b07152d234b70', '2019-07-01 13:58:18'),
(10, 'kabedah', 'kadedah@gmail.com', 'Project Memebers', '202cb962ac59075b964b07152d234b70', '2019-07-01 13:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `virement`
--

CREATE TABLE `virement` (
  `id` int(11) NOT NULL,
  `budgetname` varchar(200) NOT NULL,
  `from_Budget_line` varchar(200) NOT NULL,
  `To_budget_line` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `virement_made_by` varchar(200) NOT NULL,
  `madeon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `virement`
--

INSERT INTO `virement` (`id`, `budgetname`, `from_Budget_line`, `To_budget_line`, `amount`, `virement_made_by`, `madeon`) VALUES
(1, 'Capital Budget', 'Computer Equipment', 'Computer Equipment', '7800', 'timo', '2019-07-20 19:41:18'),
(2, 'Capital Budget', 'Computer Equipment', 'Computer Equipment', '7800', 'timo', '2019-07-20 19:41:29'),
(3, 'Capital Budget', 'infrastructure  Construction and renovation ', 'Computer Equipment', '4500', 'rogers', '2019-07-20 19:42:11'),
(4, 'Capital Budget', 'infrastructure  Construction and renovation ', 'Computer Equipment', '4500', 'rogers', '2019-07-20 19:42:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approvedbudget`
--
ALTER TABLE `approvedbudget`
  ADD PRIMARY KEY (`ProjectId`),
  ADD UNIQUE KEY `Item` (`Item`),
  ADD UNIQUE KEY `FinancialYear` (`FinancialYear`),
  ADD UNIQUE KEY `FY_id` (`FY_id`),
  ADD UNIQUE KEY `FinancialYear_2` (`FinancialYear`),
  ADD KEY `CostCenterID` (`CostCenterID`);

--
-- Indexes for table `budget_item`
--
ALTER TABLE `budget_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `budget_line`
--
ALTER TABLE `budget_line`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capitalbudget`
--
ALTER TABLE `capitalbudget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costcenters`
--
ALTER TABLE `costcenters`
  ADD PRIMARY KEY (`costcenterID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_year`
--
ALTER TABLE `financial_year`
  ADD PRIMARY KEY (`FY_id`),
  ADD KEY `FY_id` (`FY_id`);

--
-- Indexes for table `projectname`
--
ALTER TABLE `projectname`
  ADD PRIMARY KEY (`ProjectName`),
  ADD KEY `ProjectId` (`ProjectId`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_team`
--
ALTER TABLE `project_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`TransactionID`),
  ADD KEY `FinancialYear` (`FinancialYear`),
  ADD KEY `ProjectId` (`ProjectId`),
  ADD KEY `Orginator` (`Orginator`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `virement`
--
ALTER TABLE `virement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approvedbudget`
--
ALTER TABLE `approvedbudget`
  MODIFY `Item` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `budget_item`
--
ALTER TABLE `budget_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `budget_line`
--
ALTER TABLE `budget_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `capitalbudget`
--
ALTER TABLE `capitalbudget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `costcenters`
--
ALTER TABLE `costcenters`
  MODIFY `costcenterID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `financial_year`
--
ALTER TABLE `financial_year`
  MODIFY `FY_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_team`
--
ALTER TABLE `project_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `virement`
--
ALTER TABLE `virement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
