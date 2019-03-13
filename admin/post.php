<?php 
include 'header.php';
?>
<div class="spacer">
    
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <form>
                <input type="text" name="head" id="fol" class="form-control"  placeholder="header goes here">
                <textarea name="editor1" id="editor1">
                
                 </textarea>
                <script>
                    CKEDITOR.replace('editor1');

                 </script>
            
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text rare-wind-gradient" id="inputGroupFileAddon01">Featured Image</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="rare-wind-gradient custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            <input type="submit" id="btn" value="PUBLISH"class="btn btn-block peach-gradient" >
            </form>
        </div>

        <div class="col-md-6">


            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php
include 'admin-footer.php';
include 'footer.php';

?>