<?php require('common/head.php'); ?>
<div class="container">
  <div class="background-title" style="padding:10%;">
    <ul>
      <li class="menu-item">
        <a href="AddTask.php"><button class="Button Add-Button" type="button" name="button">Add task</button></a>
      </li>
      <li class="menu-item">
        <button class="Button Edit-Button" type="button" name="button"><strike>Edit task</strike></button>
      </li>
      <li class="menu-item">
        <button class="Button Delete-Button" type="button" name="button"><strike>Delete task</strike></button>
      </li>
      <li class="menu-item">
        <a href="LogOut.php"><button class="Button LogOut-Button" type="button" name="button">Log out</button></a>
      </li>
    </ul>
  </div>
  <div class="taskList">
    <table class="taskTable">
      <tr class="TaskRow">
        <th>
          ID
        </th>
        <th>
          Task name
        </th>
        <th>
          Description
        </th>
      </tr>
      <?php foreach ($TaskList as $key => $value): ?>
        <tr class="TaskRow">
          <td>
            <?php if ($value->Complete): ?>
              <strike><?php echo $value->Id ?></strike>
            <?php else: ?>
              <?php echo $value->Id ?>
            <?php endif; ?>
          </td>
          <td>
            <?php if ($value->Complete): ?>
              <strike><?php echo $value->TaskName ?></strike>
            <?php else: ?>
            <?php echo $value->TaskName ?>
            <?php endif; ?>
          </td>
          <td>
            <?php if ($value->Complete): ?>
              <strike><?php echo $value->Description ?></strike>
            <?php else: ?>
            <?php echo $value->Description ?>
            <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>

<?php require('common/footer.php'); ?>
