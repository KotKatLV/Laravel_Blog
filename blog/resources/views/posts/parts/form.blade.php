<div class="form-group">
    <input type="text" class="form-control" name="title" required value="{{old('title')??$post->title??''}}">
</div>
<div class="form-group">
    <textarea type="descr" rows="3" class="form-control" name="descr" required>{{old('descr')??$post->descr??''}}</textarea>
</div>

<div class="form-group">
    <input type="file" name="img">
</div>
