<?php
global $wpdb, $table_prefix;
$wp_donation = $table_prefix.'spiral_contact_form';
  $q = "SELECT * FROM `$wp_donation`;";
$results = $wpdb->get_results($q);

ob_start()
?>

<div class="wrap">

<div class="donation-history-title"><h1>Contact form</h1></div>

<div class="search-input">
<form action="<?php echo admin_url('admin.php'); ?>" id="my-search-form">
  <input type="hidden" name="page" value="my-plugin-page">
  <input class="my_search_word"  type="text" name="my_search_word" id="my_search_word" placeholder="Search by id, full name, email or contact no.">
  <input class="my_search_btn" type="submit" name="search" value="Search" />
</form>
</div>



<table class="wp-list-table widefat fixed striped table-view-list posts" style="margin-top:1rem;">
  <tr>
  <th><strong>Contact Id</strong></th>
    <th><strong>Full Name</strong></th>
    <th><strong>Email</strong></th>
    <th><strong>Contact no.</strong></th>
    <th><strong>Subject</strong></th>
    <th><strong>Message</strong></th>
    <th><strong>Date</strong></th>
    <th><strong>Action</strong></th>
  </tr>
  <tbody id="my-table-results">
    <?php 
    $reversed_results = array_reverse($results);

    foreach($reversed_results as $row): ?>
      <tr class="table-row" >
      <td><div class="row-cell"><?php echo "RGTWF0" . $row->id; ?></div></td>
      <td><div class="row-cell"><?php echo $row->name; ?></div></td>
      <td><div class="row-cell"><?php echo $row->email; ?></div></td>
      <td><div class="row-cell"><?php echo $row->contact; ?></div></td>
      <td><div class="row-cell"><?php echo $row->subject; ?></div></td>
      <td><div class="row-cell"><?php echo $row->message; ?></div></td>
      <td><div class="row-cell"><?php echo $row->date; ?></div></td>
      
      <td><div class="row-cell">

      <a href="admin.php?page=donation-edit&id=<?php echo $row->id; ?>" style="margin-right:1rem;">Edit</a>
      <a href="admin.php?page=donation-delete&id=<?php echo $row->id; ?>">Delete</a>
</div>
      </td>
    </tr>
  <?php endforeach; ?>
    </tbody>
</table>
    </div>

<?php
echo ob_get_clean();


