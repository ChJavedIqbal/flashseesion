<h1>Add new member</h1>
<?php if(session('store')): ?>
    <h3>Data saved for <?php echo e(session('store')); ?></h3>
<?php endif; ?>

<form action="UserController" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="user" placeholder="Enter user name" /><br><br>
    <input type="password" name="password" placeholder="Enter password" /><br><br>
    <input type="email" name="email" placeholder="Email" /><br><br>
    <button type="submit">Add User</button>


</form>
<?php /**PATH /var/www/html/flashSession/resources/views/storeUser.blade.php ENDPATH**/ ?>