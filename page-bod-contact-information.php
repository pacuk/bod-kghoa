<?php
/**
 * Template Name: BOD Contact Information
 */

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );
?>

        <div class="page-bod-contact-information container-md mt-4 mb-5">
            
            <h1 class="my-4">BOD Contact Information</h1>
            <a href="<?php echo admin_url( 'profile.php' );?>" target="_blank" class="btn btn-secondary mb-3" role="button" type="button">Edit My Info</a>
                 
           
            

            <div class="board-members-wrap table-responsive">
                <table id="bod-contact-info" class="table table-striped table-bordered">
                    <thead class="table-secondary border-top border-secondary-subtle">
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>HOA Email</th>
                            <th>Personal Email</th>
                            <th>Term Expires</th>
                        </tr>
                    </thead>
                    <tbody>
    
                        <tr>
                            <td>Terry&nbsp;Cleveland</td>
                            <td>President</td>
                            <td>317-409-9234</td>
                            <td>2921 Nottinghill Way</td>
                            <td><a href="mailto:president@kensingtongrovehoa.org">president</a></td>
                            <td><a href="mailto:tcleve13@gmail.com">tcleve13@gmail.com</a></td>
                            <td>2025</td>
                        </tr>
        
                        <tr>
                            <td>Brooks&nbsp;Chumley</td>
                            <td>Vice-President</td>
                            <td>317-914-8806</td>
                            <td>5386 Camden Lane</td>
                            <td><a href="mailto:vp@kensingtongrovehoa.org">vp</a></td>
                            <td><a href="mailto:chumley9t@gmail.com">chumley9t@gmail.com</a></td>
                            <td>2025</td>
                        </tr>
        
                        <tr>
                            <td>Tino&nbsp;Marquez</td>
                            <td>Secretary</td>
                            <td>317-513-8116</td>
                            <td>5517 Camden Lane</td>
                            <td><a href="mailto:secretary@kensingtongrovehoa.org">secretary</a></td>
                            <td><a href="mailto:tino.marquez@gmail.com">tino.marquez@gmail.com</a></td>
                            <td>2026</td>
                        </tr>
        
                        <tr>
                            <td>Chuck&nbsp;Rivera</td>
                            <td>Treasurer</td>
                            <td>317-409-9323</td>
                            <td>5363 Chancery Blvd</td>
                            <td><a href="mailto:treasurer@kensingtongrovehoa.org">treasurer</a></td>
                            <td><a href="mailto:cmrivera0925@gmail.com">cmrivera0925@gmail.com</a></td>
                            <td>2026</td>
                        </tr>
        
                        <tr>
                            <td>Mike&nbsp;Medlock</td>
                            <td>Director</td>
                            <td>317-908-9709</td>
                            <td>3083 Coventry Lane</td>
                            <td><a href="mailto:director1@kensingtongrovehoa.org">director1</a></td>
                            <td><a href="mailto:boiler67.mm@gmail.com">boiler67.mm@gmail.com</a></td>
                            <td>2026</td>
                        </tr>
        
                        <tr>
                            <td>RuthAnn&nbsp;Ansel</td>
                            <td>Director</td>
                            <td>317-833-5731</td>
                            <td>2891 Bloomsbury South</td>
                            <td><a href="mailto:director2@kensingtongrovehoa.org">director2</a></td>
                            <td><a href="mailto:annsell5@aol.com">annsell5@aol.com</a></td>
                            <td>2025</td>
                        </tr>
        
                        <tr>
                            <td>Andrew&nbsp;Kendall</td>
                            <td>Director</td>
                            <td>812-573-3287</td>
                            <td>5029 Nottinghill Court</td>
                            <td><a href="mailto:director3@kensingtongrovehoa.org">director3</a></td>
                            <td><a href="mailto:akendal2@IUHealth.org">akendal2@IUHealth.org</a></td>
                            <td>2025</td>
                        </tr>
        
    
                    </tbody>
                </table>
            </div>

        </div>

<?php get_footer();