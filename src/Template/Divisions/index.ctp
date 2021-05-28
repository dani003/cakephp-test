<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Division Code</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($division as $key => $value) { ?>
            <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->division_code; ?> </td>
                <td><?php echo $value->name; ?> </td>
                <td><?php echo $this->Html->link(__("Edit"), ['action' => 'edit', $value->id]); ?> </td>
            </tr>
        <?php } ?>
    </tbody>

</table>