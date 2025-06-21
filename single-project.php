<?php 
namespace HOAProjects;

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );

$property = get_field('property');
$propParts = explode('|',$property);
$lotno = $propParts[0];
$owner = $propParts[1];
$address = $propParts[2];
$submitted = get_field('submitted');
$status = get_field('status');
$can_vote = in_array($status, ['Under Review','Pending']);
$vote_msg = ($can_vote)? '<td class="text-center fw-semibold text-success">Voting is open</td>':'<td class="text-center fw-semibold text-danger">Voting is closed</td>';
$signoff_date = get_field('signoff_date');
$final_decision = get_field('final_decision');
$decision_process = get_field('decision-process');
if($decision_process == 'ratified') $decision_process = 'In-person Meeting';
$closed = get_field('closed');
$comments = get_field('comments');
$comments_allowed_statuses = ['Under Review', 'Pending', 'Awaiting Ratification', 'On Hold'];
$my_vote = kghoa_get_board_member_project_vote(get_the_ID());
$vote_totals = kghoa_get_vote_totals(get_the_ID());

?>
<div class="page-project-detail container-md mt-4 mb-5">
	<a href="/property-improvement-requests/" class="btn btn-dark" role="button">Back to Project List</a>
	<h1 class="mt-2 mb-2 mb-lg-4"><?php the_title(); ?></h1>

	<div class="row bg-secondary-subtle p-3 mb-5">
		<!-- Left side column DETAIL INFO-->
		<div class="col-lg-6">
			<ul class="list-unstyled mb-5 mb-lg-0">
				<li><span class="fw-bold">Posted Date:</span> <?php echo esc_html($submitted); ?></li>
				<li><span class="fw-bold">Property:</span> <?php echo esc_html($lotno).' - '.$address; ?></li>
				<li><span class="fw-bold">Owner:</span> <?php echo $owner; ?></li>
				<li class="mt-3"><span class="fw-bold">Status:</span> <?php echo '<span class="h5">'.kghoa_translate_status_to_badge($status).'</span>'; ?></li>

				<?php if ($signoff_date): ?>
				<li><span class="fw-bold">Signoff Date:</span> <?php echo esc_html($signoff_date); ?></li>
				<?php endif; ?>

				<?php if ($final_decision): ?>
				<li><span class="fw-bold">Final Decision:</span> <?php echo esc_html(ucfirst($final_decision)); ?></li>
				<?php endif; ?>

				<?php if ($decision_process): ?>
				<li><span class="fw-bold">Decision Method:</span> <?php echo esc_html(ucfirst($decision_process)); ?></li>
				<?php endif; ?>

				<?php if ($closed): ?>
				<li><span class="fw-bold">Date Closed:</span> <?php echo esc_html($closed); ?></li>
				<?php endif; ?>
			</ul>
		</div>

		<!-- right side column VOTING TABLE -->
		<div class="col-lg-6">
					<?php echo do_shortcode('[hoa_vote_table]');?>
			<!--
			<form id="hoa-vote-form" method="post" action="">
				<table id="project_votes" class="table table-bordered border-dark">
					<thead>
						<?php echo $vote_msg; ?>
						<th class="text-center">Approve</th>
						<th class="text-center">Disapprove</th>
						<th class="text-center">Abstain</th>
					</thead>
					<tbody>
						<tr>
							<th>My Vote</th>
							<?php /* for($i = 1; $i <= 3; $i++): 
								if($i == 1) { $vID = 'yes'; } 
								elseif($i == 2) { $vID = 'no'; }
								else { $vID = 'abstain';}							
								?> 						
							<td class="vote-cell">
								<div class="form-check mt-1">
									<input class="form-check-input ml-1 border-dark" type="radio" name="vote" id="vote-<?= $vID ?>" value="<?= $i ?>" data-id="9999"<?= $can_vote ? '' : ' disabled readonly' ?> />
								</div>
							</td>
							<?php endfor;?>
						</tr>
						<tr>
							<th>Total Votes</th>
							<td class="vote-cell"><div id="total-yes" class="totalvotes fw-bold text-center"><?= $vote_totals[1] ?></div></td>
							<td class="vote-cell"><div id="total-no" class="totalvotes fw-bold text-center"><?= $vote_totals[2] ?></div></td>
							<td class="vote-cell"><div id="total-abstain" class="totalvotes fw-bold text-center"><?= $vote_totals[3] */ ?></div></td>
						</tr>
					</tbody>
				</table>
			</form>
			<div class="fst-italic">NOTE: You may change your vote while voting is open.</div>         
							-->      
		</div>

  	</div><!-- eof ROW -->

	<div class="row mb-5">
		<!-- left side column ADMIN COMMENTS -->
		<div class="col-lg-6 mb-5 mb-lg-0">			
			<h2>Admin Comments</h2>
			<?php if (!empty($comments)): ?>
			<ul>
				<?php foreach ($comments as $c): ?>
				<li><span class="fw-bold"><?php echo esc_html($c['date']); ?>:</span> <?php echo nl2br(esc_html($c['comment'])); ?></li>
				<?php endforeach; ?>
			</ul>
			<?php else:
			echo '<div class="">There are no admin comments.</div>';
			endif; ?>				
		</div>

		<!-- right side column DOCUMENTS -->
		<div class="col-lg-6">
			<h2 class="">Documents</h2>
			<img class="img-fluid" src="<?php echo plugins_url() . '/kghoa-owner-projects/docs.jpg';?>" />
		</div>

	</div>

  

	<h2 class="pt-3 border-top border-dark">Reviewer Comments</h2>
	<div class="ms-3">
		<?php
			add_filter('comments_open', function($open, $post_id) use ($status, $comments_allowed_statuses) {
				return in_array($status, $comments_allowed_statuses);
			}, 999, 2);

			comments_template();
			remove_filter('comments_open', '__return_false', 999);
		?>
	</div>
</div>

<?php get_footer(); ?>
 
