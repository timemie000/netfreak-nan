<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.6/plyr.css" integrity="sha256-YVY0cgMlN3Yk6z5+sLnD90gFlKARWzjDwWSnReb0ATI=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.6/plyr.polyfilled.min.js" integrity="sha256-Sdu0acpXTwRu5nAKbHFx1nfYiyTCycheoKP4YwWMuGs=" crossorigin="anonymous"></script>

<video
    id="video"
    playsinline controls
    poster="">
    <source src="https://file-examples.com/wp-content/uploads/2017/04/{{$episode->file_name}}.mp4" type="video/mp4" />
</video>

<script>const video = new Plyr("#video");</script>
