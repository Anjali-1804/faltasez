</main>
<footer class="site-footer gigw-footer" role="contentinfo">
    <div class="container">
        <div class="gigw-footer-grid">
            <div>
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="help.php">Help</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="accessibility-statement.php">Accessibility Statement</a></li>
                    <li><a href="screen-reader.php">Screen Reader Access</a></li>
                    <li><a href="disclaimer.php">Disclaimer</a></li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="terms-condition.php">Terms and Conditions</a></li>
                    <li><a href="copyright-policy.php">Copyright Policy</a></li>
                    <li><a href="hyper-linking-policy.php">Hyperlinking Policy</a></li>
                    <li><a href="security-policy.php">Security Policy</a></li>
                    <li><a href="content-moderation-policy.php">Content Moderation Policy</a></li>
                    <li><a href="content-archival-policy.php">Content Archival Policy</a></li>
                    <li><a href="content-review-policy.php">Content Review Policy</a></li>
                    <li><a href="website-monitoring-plan.php">Website Monitoring Plan</a></li>
                    <li><a href="contingency-management-plan.php">Contingency Management Plan</a></li>
                    <li><a href="sitemap.php">Sitemap</a></li>
                </ul>
            </div>
            <div>
                <h2>Quick Contact</h2>
                <p>Phone: <a href="tel:+913322872263">+91-33-2287-2263</a> / 2287-4092</p>
                <p>Email: <a href="mailto:fsez@nic.in">fsez@nic.in</a></p>
                <ul>
                    <li><a href="https://www.india.gov.in/" target="_blank" rel="noopener noreferrer" title="Opens in a new window">National Portal of India</a></li>
                    <li><a href="https://www.sezonline-ndml.com/" target="_blank" rel="noopener noreferrer" title="Opens in a new window">SEZ Online</a></li>
                    <li><a href="https://silpasathi.wb.gov.in" target="_blank" rel="noopener noreferrer" title="Opens in a new window">Silpa Sathi Portal</a></li>
                    <li><a href="vigilance.php">Vigilance</a></li>
                    <li><a href="public-grievance.php">CPGRAMS</a></li>
                    <li><a href="right-to-information.php">Right to Information</a></li>
                </ul>
            </div>
            <div>
                <h2>Contact us</h2>
                <p>Office of the Development Commissioner<br>
                Falta Special Economic Zone<br>
                Nizam Palace, 234/4, A.J.C. Bose Road<br>
                Kolkata 700020</p>
                <?php
                $fbUrl = fsez_ext_url(isset($gbl_row["fb_link"]) ? $gbl_row["fb_link"] : "");
                $twUrl = fsez_ext_url(isset($gbl_row["tw_link"]) ? $gbl_row["tw_link"] : "");
                if ($fbUrl || $twUrl) {
                ?>
                <div class="gigw-social">
                    <p>Follow us</p>
                    <ul>
                        <?php if ($fbUrl) { ?>
                        <li><a href="<?php echo htmlspecialchars($fbUrl); ?>" target="_blank" rel="noopener noreferrer" title="Facebook, opens in a new window"><i class="fa fa-facebook" aria-hidden="true"></i><span class="sr-only"> Facebook</span></a></li>
                        <?php } ?>
                        <?php if ($twUrl) { ?>
                        <li><a href="<?php echo htmlspecialchars($twUrl); ?>" target="_blank" rel="noopener noreferrer" title="X / Twitter, opens in a new window"><i class="fa fa-twitter" aria-hidden="true"></i><span class="sr-only"> Twitter</span></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="gigw-footer-bottom">
            <p class="gigw-owned">Content owned, maintained and updated by the Office of the Development Commissioner, Falta Special Economic Zone, Department of Commerce, Ministry of Commerce and Industry, Government of India.</p>
            <ul>
                <li>Last updated: <?php echo fsez_last_updated_html(); ?></li>
                <li>&copy; 2026 Falta Special Economic Zone, Government of India. All rights reserved.</li>
                <li>Designed, developed and hosted by <a href="https://openbraces.in" target="_blank" rel="noopener noreferrer" title="Opens in a new window">OpenBraces</a></li>
            </ul>
        </div>
    </div>
</footer>
<script src="js/gigw.js?v=34"></script>
