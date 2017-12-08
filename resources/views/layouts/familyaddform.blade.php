
@if(!isset($details))
<td></td>
<td> <input type="text" name="name" class="form-control"></td>
<td> <input type="text" name="relation" class="form-control"></td>
<td> <input type="text" name="qualification" class="form-control"></td>
<td> <input type="text" name="occupation" class="form-control"></td>
<td> <input type="text" name="aadhar" class="form-control"></td>
<td> <input type="text" name="contact" class="form-control"></td>
<td> <input type="submit" class="btn btn-primary btn-xs" class="form-control"></td>
<td> <input type="button" class="btn btn-danger btn-xs" class="form-control" value="cancel"></td>
@else
<td> <input type="text" name="id" value="{{$details->id}}" class="form-control" style="visibility:hidden;"></td>
<td> <input type="text" name="name" value="{{$details->name}}" class="form-control"></td>
<td> <input type="text" name="relation" value="{{$details->relation}}" class="form-control"></td>
<td> <input type="text" name="qualification" class="form-control" value="{{$details->qualification}}"></td>
<td> <input type="text" name="occupation" class="form-control" value="{{$details->occupation}}"></td>
<td> <input type="text" name="aadhar" class="form-control" value="{{$details->aadhar}}"></td>
<td> <input type="text" name="contact" class="form-control" value="{{$details->contact}}"></td>
<td> <input type="submit" class="btn btn-primary btn-xs" class="form-control"></td>
<td> <input type="button" class="btn btn-danger btn-xs" class="form-control" value="cancel"></td>
@endif
