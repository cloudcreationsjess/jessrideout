<footer class="content-info">
    {{--  @php(dynamic_sidebar('sidebar-footer'))--}}
    <div class="copyright">
        Copyright © <?php echo date('Y'); ?> Company Name. All Rights Reserved. &bull; <a href="/privacy-policy/">Privacy Policy</a> &bull; <a href="/wp-login.php">Log in</a>
    </div>
</footer>
</div> <!-- #panel ends -->
</div> <!-- #app end -->


@php(do_action('get_footer'))
@php(wp_footer())
@stack('footer.scripts')
</body>
</html>
