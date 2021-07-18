<div class="col-lg-6">
    <div class="card">

      <div class="twentytwenty-container">
        <img src="{{'/uploads' . '/' .$project->before_path}}" alt="before" style="width:100% !important height:auto !important "/>
        <img src="{{'/uploads'. '/' .$project->after_path}}" alt="after"  style="width:100% !important height:auto !important "/>
      </div>

      <div class="card-body">
        <h6 class="card-title" style="color:#A52A2A; text-align:center; text-transform:uppercase">{{$project->title}}</h6>
        <p class="card-text" style="color: #826C5F">{{Str::words($project->about , 40  , '......' )}}</p>
        <a id="btn-readmore-gallery" href="{{route('projects.show' , ['project' => $project->id])}}" class="btn">Read more</a>
      </div>
    </div>
</div> 