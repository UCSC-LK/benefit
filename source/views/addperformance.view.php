<!DOCTYPE html>
<html>
  <head>
    <title>Feedback Form</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600'>


    <link rel="stylesheet" href="<?=CSS_PATH?>addperfor.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  </head>
  <body>
  <div>
    <?php
    $this->view('includes/header1');
    ?>
</div>
  <div>
    <?php
    $this->view('includes/parentemployeenavbar');
    ?>
</div>
    <div class="testbox">
      <form method="post">
        <h1>Employees Feedback Form</h1>

        <hr />
        <h3>Overall experience of employee</h3>
        <!-- <label class="h2" for="employee_ID">Enter emp id:</label><br>
  <input type="text" id="employee_ID" name="employee_ID" placeholder="Id"required> -->
        <table>
          <tr>
            <th class="first-col"></th>
            <th>Very Good</th>
            <th>Good</th>
            <th>Fair</th>
            <th>Poor</th>
            <th>Very Poor</th>
          </tr>
          <tr>
            <td class="first-col">Communication</td>
            <td><input type="radio" value="100" name="communication" /></td>
            <td><input type="radio" value="75" name="communication" /></td>
            <td><input type="radio" value="50" name="communication" /></td>
            <td><input type="radio" value="25" name="communication" /></td>
            <td><input type="radio" value="0" name="communication" /></td>
          </tr>
          <tr>
            <td class="first-col">Quality of work</td>
            <td><input type="radio" value="100" name="quality_of_work" /></td>
            <td><input type="radio" value="75" name="quality_of_work" /></td>
            <td><input type="radio" value="50" name="quality_of_work" /></td>
            <td><input type="radio" value="25" name="quality_of_work" /></td>
            <td><input type="radio" value="0" name="quality_of_work" /></td>
          </tr>
          <tr>
            <td class="first-col">organization</td>
            <td><input type="radio" value="100" name="organization" /></td>
            <td><input type="radio" value="75" name="organization" /></td>
            <td><input type="radio" value="50" name="organization" /></td>
            <td><input type="radio" value="25" name="organization" /></td>
            <td><input type="radio" value="0" name="organization" /></td>
          </tr>
          <tr>
            <td class="first-col">Team skills</td>
            <td><input type="radio" value="100" name="team_skills" /></td>
            <td><input type="radio" value="75" name="team_skills" /></td>
            <td><input type="radio" value="50" name="team_skills" /></td>
            <td><input type="radio" value="25" name="team_skills" /></td>
            <td><input type="radio" value="0" name="team_skills" /></td>
          </tr>
          <tr>
            <td class="first-col">Multitasking ability</td>
            <td><input type="radio" value="100" name="multitasking_ability" /></td>
            <td><input type="radio" value="75" name="multitasking_ability" /></td>
            <td><input type="radio" value="50" name="multitasking_ability" /></td>
            <td><input type="radio" value="25" name="multitasking_ability" /></td>
            <td><input type="radio" value="0" name="multitasking_ability" /></td>
          </tr>
        </table>
          <button type="submit" value="submit" name="submit">Add Performance</button>
        </div>
      </form>
    </div>
    <div>
    <?php $this->view('includes/footer')?>
</div>
  </body>
</html>

