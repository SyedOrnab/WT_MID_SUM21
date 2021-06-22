<html>
<head>
    <title>Doctor Information Form</title>
</head>
<body>
			<div>
				<ul>
					<li ><a href="DoctorAccount.php">Doctor Account </a></li>
					<li><a href="DoctorInformation.php">Doctor Info</a></li>
					<li><a href="PublicRelease.php">Public Release </a></li>
					<li><a href="VaccinationUpate.php">Vaccination update</a></li>
				</ul>
			</div>

        <form action="" method="">
            <table>
              <h3 style="color:blue"><u>Doctor Information:</u></h3>
              <tr>
                <td align="right">First Name:</td>
                <td>
                  <input type="text" name="first_name" placeholder="Enter first name">
                  <br>
                </td>
              </tr>
              <tr>
                <td align="right">Middle Name:</td>
                <td>
                  <input type="text" name="middle_name" placeholder="Enter middle name">
                  <br>
                </td>
              </tr>
              <tr>
                <td align="right">Last Name:</td>
                <td>
                  <input type="text" name="Last_name" placeholder="Enter last name">
                  <br>
                </td>
              </tr>
              <tr>
                <td align="right">Date of Birth:</td>
                <td>
                  <input type="datetime-local" name="doc_dob">
                </td>
                <br>
              </tr>
              <tr>
                <td align="right">Gender:</td>
                <td> <input type="radio" name="gender">Male
                  <input type="radio" name="gender">Female
                  <input type="radio" name="gender">Others</td>
              </tr>
              <tr>
                <td align="right">Date of appointment:</td>
                <td>
                  <input type="datetime-local" name="appointment_time">
                </td>
              </tr>
            </table>
        <h3><u>Educational Qualifications:</u></h3>
        <table>
                <tr>
                    <th>Serial</th>
                    <th>Degree</th>
                    <th>Board/Institute</th>
                    <th>Year</th>
                    <th>Division/CGPA</th>
                    <th>Position</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>SSC</td>
                  <td><input type="test" name="inst_name" placeholder="insert institute name" required></td>
                  <td><input type="test" name="year" placeholder="insert year of graduation"required></td>
                  <td><input type="test" name="div/cgpa" placeholder="insert division/cgpa"required></td>
                  <td><input type="test" name="position" placeholder="insert position"required></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>HSC/A'Levels</td>
                  <td><input type="test" name="inst_name"required></td>
                  <td><input type="test" name="year"required></td>
                  <td><input type="test" name="div/cgpa"required></td>
                  <td><input type="test" name="position"required></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>MBBS</td>
                  <td><input type="test" name="inst_name"required></td>
                  <td><input type="test" name="year"required></td>
                  <td><input type="test" name="div/cgpa"required></td>
                  <td><input type="test" name="position"required></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td><input type="test" name="degree" placeholder="insert degree"></td>
                  <td><input type="test" name="inst_name"></td>
                  <td><input type="test" name="year"></td>
                  <td><input type="test" name="div/cgpa"></td>
                  <td><input type="test" name="position"></td>
                </tr>
                <tr>
                  <td>5.</td>
                  <td><input type="test" name="degree"></td>
                  <td><input type="test" name="inst_name"></td>
                  <td><input type="test" name="year"></td>
                  <td><input type="test" name="div/cgpa"></td>
                  <td><input type="test" name="position"></td>
                </tr>
        </table>

        <h3><u>Experience:</u></h3>
        <table>
          <tr>
              <th>Serial</th>
              <th>Job Designation</th>
              <th>From</th>
              <th>To</th>
              <th>Organization</th>
          </tr>
          <tr>
            <td>1.</td>
            <td><input type="test" name="job_desg" placeholder="insert job designation" required></td>
            <td><input type="date" name="from" placeholder="insert starting date" required></td>
            <td><input type="date" name="to" placeholder="insert regination date" required></td>
            <td><input type="test" name="org_name" placeholder="insert name of organization" required></td>
          </tr>
          <tr>
            <td>2.</td>
            <td><input type="test" name="job_desg" ></td>
            <td><input type="date" name="from" ></td>
            <td><input type="date" name="to" ></td>
            <td><input type="test" name="org_name"></td>
          </tr>
          <tr>
            <td>3.</td>
            <td><input type="test" name="job_desg" ></td>
            <td><input type="date" name="from" ></td>
            <td><input type="date" name="to" ></td>
            <td><input type="test" name="org_name"></td>
          </tr>
          <tr>
            <td>4.</td>
            <td><input type="test" name="job_desg" ></td>
            <td><input type="date" name="from" ></td>
            <td><input type="date" name="to" ></td>
            <td><input type="test" name="org_name"></td>
          </tr>
        </table>
        <h3><u>Membership:</u></h3>
        <fieldset>
          <table>
            <tr>
              <td><input type="radio" name="membership">Bangladesh Medical Association</td>
              <td><input type="radio" name="membership">American Medical Accosiation</td>
              <td><input type="radio" name="membership">Canada Medical Society</td>
              <td><input type="radio" name="membership">Others</td>
              <td> <input type="text" name="Others" placeholder="if others.."> </td>
            </tr>
          </table>
        </fieldset>
        <p align="center"><button>Submit form</button></p>
  </form>
</body>
