<?php require_once VIEW_PATH . '/header.tpl.php' ?>

<body>
	<div class="container">
	<?php if (false === isset($bookings)): ?>
		Can't load bookings list
	<?php else: ?>
		<?php if (isset($error)): ?>
			<p class="alert alert-warning"><?php echo $error; ?></p>
		<?php endif; ?>
		<?php if (isset($message)): ?>
			<p class="alert alert-success"><?php echo $message; ?></p>
		<?php endif; ?>

		<table class="table table-responsive">
			<thead>
				<tr>
					<th>ID</th>
					<th>Destination</th>
					<th>Insurance</th>
					<th>Price</th>
					<th>Nom - Age</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($bookings->getBookings() as $booking): ?>
			<tr>
				<th scope="row"><?php echo $booking->getId() ?></th>
				<td><?php echo $booking->getDestination() ?></td>
				<td><?php echo $booking->isInsurance() ? 'yes' : 'no'; ?></td>
				<td><?php echo $booking->getPrice() ?></td>
				<td>
					<ul>
					<?php foreach($booking->getTravellers() as $traveller): ?>
						<li><?php echo $traveller->getFirstname()?> - <?php echo $traveller->getAge() ?></li>
					<?php endforeach; ?>
					</ul>
				</td>
				<td><a href="?action=edit&id=<?php echo $booking->getId() ?>" class="btn btn-primary">Edit</a></td>
				<td><a href="?action=delete&id=<?php echo $booking->getId() ?>" class="btn btn-danger">Delete</a></td>
			</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	<?php endif; ?>
	</div>
</body>
