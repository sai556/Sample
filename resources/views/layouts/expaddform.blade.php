
@if(!isset($details))
<td></td>
<td> <input type="text" name="organization" class="form-control"></td>
<td> <input type="text" name="address" class="form-control"></td>
<td> <input type="text" name="city" class="form-control"></td>
<td> <input type="text" name="state" class="form-control"></td>
<td> <input type="text" name="postheld" class="form-control"></td>
<td> <input type="text" name="fromyear" class="form-control"></td>
<td> <input type="text" name="toyear" class="form-control"></td>
<td> <input type="submit" class="btn btn-primary btn-xs" class="form-control"></td>
<td> <input type="button" class="btn btn-danger btn-xs" class="form-control" value="cancel"></td>
@else
<td> <input type="text" name="id" value="{{$details->id}}" class="form-control" style="visibility:hidden;"></td>
<td> <input type="text" name="organization" value="{{$details->organization}}" class="form-control"></td>
<td> <input type="text" name="address" value="{{$details->address}}" class="form-control"></td>
<td> <input type="text" name="city" class="form-control" value="{{$details->city}}"></td>
<td> <input type="text" name="state" class="form-control" value="{{$details->state}}"></td>
<td> <input type="text" name="postheld" class="form-control" value="{{$details->postheld}}"></td>
<td> <input type="text" name="fromyear" class="form-control" value="{{$details->fromyear}}"></td>
<td>  <input type="text" name="toyear" class="form-control" value="{{$details->toyear}}"></td>
<td> <input type="submit" class="btn btn-primary btn-xs" class="form-control"></td>
<td> <input type="button" class="btn btn-danger btn-xs" class="form-control" value="cancel"></td>
@endif
