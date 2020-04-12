<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2016. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href="https://www.facebook.com"></a></li>
              <li><a class="fa fa-twitter" href="https://www.twitter.com"></a></li>
              <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com"></a></li>
              <li><a class="fa fa-vimeo" href="https://www.vimeo.com"></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/js/select2.min.js"></script>

<script>
$('body #select-picker').select2({
  ajax: {
    url: "/api/categories/fetch",
    dataType: 'json',
    delay: 250,
    data: function (params) {
      return {
        q: params.term, // search term
        page: params.page
      };
    },
    cache: true
  },
  placeholder: 'Search for keyword',
  minimumInputLength: 1,
  templateResult: formatRepo,
  templateSelection: formatRepoSelection
});

$('body #select-picker-make').select2({
  ajax: {
    url: "/api/makes/fetch",
    dataType: 'json',
    delay: 250,
    data: function (params) {
      return {
        q: params.term, // search term
        page: params.page
      };
    },
    cache: true
  },
  placeholder: 'Search for make',
  minimumInputLength: 1,
  templateResult: formatRepo,
  templateSelection: formatRepoSelection
});



$('body #select-picker-model').select2({
  ajax: {
    url: "/api/models/fetch",
    dataType: 'json',
    delay: 250,
    data: function (params) {
      return {
        q: params.term, // search term
        page: params.page
      };
    },
    cache: true
  },
  placeholder: 'Search for model',
  minimumInputLength: 1,
  templateResult: formatRepo,
  templateSelection: formatRepoSelection
});



$('body #select-picker-type').select2({
  ajax: {
    url: "/api/types/fetch",
    dataType: 'json',
    delay: 250,
    data: function (params) {
      return {
        q: params.term, // search term
        page: params.page
      };
    },
    cache: true
  },
  placeholder: 'Search for type',
  minimumInputLength: 1,
  templateResult: formatRepo,
  templateSelection: formatRepoSelection
});
function formatRepo (repo) {
  if (repo.loading) {
    return repo.text;
  }

  var $container = $(
    "<div class='select2-result-repository clearfix'>" +
      "<div class='select2-result-repository__meta'>" +
        "<div class='select2-result-repository__title'></div>" +
        "</div>" +
      "</div>" +
    "</div>"
  );

  $container.find(".select2-result-repository__title").text(repo.title);
  // $container.find(".select2-result-repository__description").text(repo.description);
  // $container.find(".select2-result-repository__forks").append(repo.forks_count + " Forks");
  // $container.find(".select2-result-repository__stargazers").append(repo.stargazers_count + " Stars");
  // $container.find(".select2-result-repository__watchers").append(repo.watchers_count + " Watchers");

  return $container;
}


$('body #select-picker-parts').select2({
  tags: true,
    tokenSeparators: [',', ' '],
    
  ajax: {
    url: "/api/parts/fetch",
    dataType: 'json',
    delay: 250,
    data: function (params) {
      return {
        q: params.term, // search term
        page: params.page
      };
    },
    cache: true
  },
  placeholder: 'Search for Parts',
  minimumInputLength: 1,
  templateResult: formatRepo,
  templateSelection: formatRepoSelection
});


function formatRepoSelection (repo) {
  return repo.title || repo.text;
}
</script><?php /**PATH C:\php projects\classified ads\Laravel-Classimax-Directory-2019\resources\views/partialsMainTable/footer.blade.php ENDPATH**/ ?>