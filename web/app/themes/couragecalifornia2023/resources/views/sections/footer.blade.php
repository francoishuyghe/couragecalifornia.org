<footer class="main-footer content-info">
  <div class="container">
    <div class="row">
      <div class="col-md-6 left">
        @php dynamic_sidebar('left-footer') @endphp
        <div class="copyright">
          {!! $copyright !!}
        </div>
      </div>
      <div class="col-md-6 right">
        <div class="footer-signup">
          <h3>Get updates from Courage</h3>
          <a class="button" target="_blank" href="https://act.couragecampaign.org/signup/will-you-join-us/">Sign Up Now!</a>
        </div>
        @php dynamic_sidebar('right-footer') @endphp
      </div>
    </div>
  </div>
</footer>
