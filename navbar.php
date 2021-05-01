
<style>
</style>
<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"> Home</a>
				<a href="index.php?page=loans" class="nav-item nav-loans"> Loans</a>	
				<a href="index.php?page=payments" class="nav-item nav-payments">Payments</a>
				<a href="index.php?page=borrowers" class="nav-item nav-borrowers">Borrowers</a>
				<a href="index.php?page=plan" class="nav-item nav-plan"> Loan Plans</a>	
				<a href="index.php?page=loan_type" class="nav-item nav-loan_type">Loan Types</a>		
				
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"> Users</a>
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
