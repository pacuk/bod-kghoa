<?php 
if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );

$submitted = get_field('submitted');
$status = get_field('status');
$property = get_field('property');
$propertyDetail = explode('|', $property);
$lot = $propertyDetail[0];
$owners = $propertyDetail[1];
$address = $propertyDetail[2];
$signoff_date = get_field('signoff_date');
$final_decision = get_field('final_decision');
$decision_process = get_field('decision-process');
$closed = get_field('closed');
$comments = get_field('comments');
$badgeClass = '';

switch ($status){
    case 'Under Review':
        $badgeClass=' class="badge text-bg-success"';
        break;
    case 'Pending':
        $badgeClass=' class="badge text-bg-warning"';
        break;
    case 'On Hold':
        $badgeClass=' class="badge text-bg-warning"';
        break;
    case 'Canceled':
        $badgeClass=' class="badge text-bg-danger"';
        break;
    case 'Awaiting Ratification':
        $badgeClass=' class="badge text-bg-dark"';
        break;
    case 'Completed':
        $badgeClass=' class="badge text-bg-info"';
        break;
    default:
        $badgeClass=' class="badge text-bg-secondary"';
}

if($status == 'Completed'){
    $badgeText = 'Completed - '. ucwords($final_decision);
} else {
    $badgeText = $status;
}
    

?>

    <div class="page-project-detail theme container-md mt-4 mb-5">
        <h4 class="pt-4"><span<?php echo $badgeClass;?>><?php echo $badgeText; ?></span></h4>
        <h1><?php the_title(); ?></h1>

        <?php
        
        ?>

        <ul>
            <li><span class="fw-bold me-2">Submission Date:</span> <?php echo esc_html($submitted); ?></li>
            <li><span class="fw-bold me-2">Status:</span> <?php echo esc_html($status); ?></li>
            <li><span class="fw-bold me-2">Owner:</span> <?php echo esc_html($owners); ?></li>
            <li><span class="fw-bold me-2">Address:</span> <?php echo esc_html($address); ?></li>

            <?php 
                if ($signoff_date): 
                    echo '<li><span class="fw-bold me-2">Signoff Date:</span>'. esc_html($signoff_date) .'</li>';
                endif; 

                if ($final_decision): 
                    echo '<li><span class="fw-bold me-2">Final Decision:</span>'. esc_html(ucfirst($final_decision)) .'</li>';
                endif; 

            if ($decision_process): 
                echo '<li><span class="fw-bold me-2">Decision Method:</span>'. esc_html($decision_process) .'</li>';
            endif;

            if ($closed):
                echo '<li><span class="fw-bold me-2">Date Closed:</span>'. esc_html($closed) .'</li>';
            endif; ?>    
        </ul>

        <?php if (!empty($comments)): ?>
            <h3>Admin Comments</h3>
            <ul>
                <?php foreach ($comments as $c): 
                    echo '
                    <li>
                        <strong>'. esc_html($c['date']) .':</strong><br>'
                        . nl2br(esc_html($c['comment'])) . '
                    </li>
                    ';
                endforeach; ?>
            </ul>
        <?php endif; ?>


        <?php 
        
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number()) :
            comments_template();
        endif;

    
  ?>
        
    </div>

<?php get_footer(); ?>
 
