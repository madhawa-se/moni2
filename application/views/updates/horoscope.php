<div id="horoscope" class="tab-pane" ng-controller="formController">

    <div>
        <img style="max-width: 100px" src="https://assets.materialup.com/uploads/9b911507-494a-4534-bdfb-81bb68bf6495/512x512.png" class="img-responsive"/>
    </div>
    <div>
        <img ng-src="{{imageSrc}}" class="img-responsive img-circle" style="max-width:100px" />
    </div>
    <br>
    <div class="span3">
        <input name="update" type="submit" value="Update" class="button2" ng-click="submitted = true">
    </div>
    <input type="file" name="horoscope" value="Upload Horoscope" ng-file-select="onFileSelect($files)" ng-model="imagehorescope"/>




</div>