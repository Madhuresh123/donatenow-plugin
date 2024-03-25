<?php
global $wpdb, $table_prefix;
$wp_donation = $table_prefix.'spiral_volunteer_form';
  $q = "SELECT * FROM `$wp_donation`;";
$results = $wpdb->get_results($q);

ob_start()
?>

<div class="wrap">

<div class="donation-history-title"><h1>Volunteer Form</h1></div>

<div class="search-input">
<form action="<?php echo admin_url('admin.php'); ?>" id="my-search-form">
  <input type="hidden" name="page" value="my-plugin-page">
  <input class="my_search_word"  type="text" name="my_search_word" id="my_search_word" placeholder="Search by id, full name, email or contact no.">
  <input class="my_search_btn" type="submit" name="search" value="Search" />
</form>
</div>



<table class="wp-list-table widefat fixed striped table-view-list posts" style="margin-top:1rem;">
  <tr>
  <th><strong>Volunteer Id</strong></th>
    <th><strong>Name</strong></th>
    <th><strong>Email</strong></th>
    <th><strong>Aadhaar no.</strong></th>
    <th><strong>Availability</strong></th>
    <th><strong>Contact</strong></th>
    <th><strong>State</strong></th>
    <th><strong>City</strong></th>
    <th><strong>Zip</strong></th>
    <th><strong>Comments</strong></th>
    <th><strong>Date</strong></th>

  </tr>
  <tbody id="my-table-results">
    <?php 
    $reversed_results = array_reverse($results);

    foreach($reversed_results as $row): ?>
      <tr class="table-row" >
      <td><div class="row-cell"><?php echo "RGTWF0" . $row->id; ?></div></td>
      <td><div class="row-cell"><?php echo $row->name; ?></div></td>
      <td><div class="row-cell"><?php echo $row->email; ?></div></td>
      <td><div class="row-cell"><?php echo $row->aadhaar; ?></div></td>
      <td><div class="row-cell"><?php echo $row->availability; ?></div></td>
      <td><div class="row-cell"><?php echo $row->contact; ?></div></td>
      <td><div class="row-cell"><?php echo $row->state; ?></div></td>
      <td><div class="row-cell"><?php echo $row->city; ?></div></td>
      <td><div class="row-cell"><?php echo $row->zip; ?></div></td>
      <td><div class="row-cell"><?php echo $row->comments; ?></div></td>
      <td><div class="row-cell"><?php echo $row->date; ?></div></td>
    </tr>
  <?php endforeach; ?>
    </tbody>
</table>
    </div>

<?php
echo ob_get_clean();


