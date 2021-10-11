

CREATE TABLE `tbl_contact` (
  `Id` int(11) NOT NULL,
  `fldName` varchar(50) NOT NULL,
  `fldEmail` varchar(150) NOT NULL,
  `fldPhone` varchar(15) NOT NULL,
  `fldMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES
(1, 'John', 'john@gmail.con', '9958576071', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
(2, 'luwis', 'luwis@gmail.con', '9958579075', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
(3, 'martin', 'martins@gmail.con', '9958579075', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
(4, 'andrew', 'andrew@gmail.con', '9958579222', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
(5, 'tonny', 'tonny@gmail.con', '9958579223', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
(6, 'ammy', 'ammy@gmail.con', '9958579242', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
(7, 'ammy jacson', 'ammy_jacson@gmail.con', '9958589240', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
(8, 'randy', 'randy@gmail.con', '99585792999', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
(9, 'johnson', 'johnson@gmail.con', '99585722222', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
(10, 'johnsonandjohnson', 'johnsonandjohnson@gmail.con', '99585722233', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
(11, 'Mustafa Khan', 'mustafakhan@gmail.con', '99580799999', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;
