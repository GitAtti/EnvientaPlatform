@extends('00_header.platform')

@section('content')

    <main role="main">

      <section id="env_board" class="jumbotron text-center">
        <div class="container">
          {{--<h1 class="jumbotron-heading">Projects for Cape Town</h1>--}}
          <p class="lead text-muted">
            “We, at ENVIENTA believe, technological progress can bring abundance and unlimited wealth to people.
But this is only possible if every human beings is able to access to the technology.”
          </p>
          <p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newProjectModal">Create new project</button>
            {{-- <a href="#" class="btn btn-secondary my-2">Button_2</a> --}}
          </p>
        </div>
      </section>

@include('60_campaign.new_project')

      <div class="album py-5 bg-light" id="projects">
        @include('60_campaign.projects')
      </div>

    </main>

    <script type="text/javascript">
      $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {
            //getProjects($(this).attr('href').split('page=')[1]);
            location.hash = $(this).attr('href').split('page=')[1];
            e.preventDefault();
        });
      });

      $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getProjects(page);
            }
        } else {
          getProjects(1);
        }
      });

      function getProjects(page) {
        $.ajax({
            url : '{{ $filter ? url('/s') . '/' . $filter : url('/') }}?page=' + page,
            //dataType: 'json',
        }).done(function (data) {
            $('#projects').html(data);
            location.hash = page;
        }).fail(function () {
            alert('Projects could not be loaded.');
        });
      }
    </script>
  
@endsection 