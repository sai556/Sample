
@if(!isset($details))
<td></td>
<td> <input type="text" name="instituion" class="form-control"></td>
<td> <input type="text" name="address" class="form-control"></td>
<td> <input type="text" name="city" class="form-control"></td>
<td> <input type="text" name="state" class="form-control"></td>
<td> <input type="text" name="degree" class="form-control"></td>
<td> <input type="text" name="certification" class="form-control"></td>
<td> <input type="text" name="year" class="form-control"></td>
<td> <input type="submit" class="btn btn-primary btn-xs" class="form-control"></td>
<td> <input type="button" class="btn btn-danger btn-xs" class="form-control" value="cancel"></td>
@else
<td> <input type="text" name="id" value="{{$details->id}}" class="form-control" style="visibility:hidden;"></td>
<td> <input type="text" name="instituion" value="{{$details->institution}}" class="form-control"></td>
<td> <input type="text" name="address" value="{{$details->address}}" class="form-control"></td>
<td> <input type="text" name="city" class="form-control" value="{{$details->city}}"></td>
<td> <input type="text" name="state" class="form-control" value="{{$details->state}}"></td>
<td> <input type="text" name="degree" class="form-control" value="{{$details->degree}}"></td>
<td> <input type="text" name="certification" class="form-control" value="{{$details->certification}}"></td>
<td>  <input type="text" name="year" class="form-control" value="{{$details->year}}"></td>
<td> <input type="submit" class="btn btn-primary btn-xs" class="form-control"></td>
<td> <input type="button" class="btn btn-danger btn-xs" class="form-control" value="cancel"></td>
@endif
