<div class="form-group">
    <input type="text" class="form-control" {{ isset($disableDriverID) && $disableDriverID == true ? "disabled":"disable"}} placeholder="Driver License" name="driverID" id="driverID">
</div>
<div class="form-group">
    <input type="text" class="form-control" placeholder="Name" name="name" id="name">
</div>
<div class="form-group">
    <input type="text" class="form-control" placeholder="Address" name="address" id="address">
</div>
<div class="form-group">
    <input type="text" class="form-control" placeholder="Contact" name="contact" id="contact">
</div>
<div class="form-group">
    <input type="text" class="form-control" placeholder="Vehicle Make" name="vehicleMake" id="vehicleMake">
</div>
<div class="form-group">
    <input type="text" class="form-control" placeholder="Vehicle Model" name="vehicleModel" id="vehicleModel">
</div>
<div class="form-group">
    <input type="number" class="form-control" placeholder="Vehicle Year" name="vehicleYear" id="vehicleYear">
</div>
<div class="form-group">
    <input type="text" class="form-control" placeholder="Licesne Plate" name="licensePlate" id="licensePlate">
</div>
<div class="form-group">
    <input placeholder="Route" type="text" class="form-control" placeholder="Route" name="routes" id="routes">
</div> 
{{-- <p><a href="javascript:add_new()">Add Another Route(Max 4)</a></p> --}}

<div class="form-group">
    <select name="status" id="status" class="form-control">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
        <option value="Disbanded">Disbanded</option>
    </select>
</div>