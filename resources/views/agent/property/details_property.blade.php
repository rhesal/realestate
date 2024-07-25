@extends('agent.agent_dashboard')
@section('agent')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Property Details</h6>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Property Name</td>
                                    <td><code>{{ $property->property_name }}</code></td>
                                </tr>
                                <tr>
                                    <td>Property Status</td>
                                    <td><code>{{ $property->property_status }}</code></td>
                                </tr>
                                <tr>
                                    <td>Lowest Price</td>
                                    <td><code>{{ $property->lowest_price }}</code></td>
                                </tr>
                                <tr>
                                    <td>Max Price</td>
                                    <td><code>{{ $property->max_price }}</code></td>
                                </tr>
                                <tr>
                                    <td>Bedrooms</td>
                                    <td><code>{{ $property->bedrooms }}</code></td>
                                </tr>
                                <tr>
                                    <td>Bathrooms</td>
                                    <td><code>{{ $property->bathrooms }}</code></td>
                                </tr>
                                <tr>
                                    <td>Garage</td>
                                    <td><code>{{ $property->garage }}</code></td>
                                </tr>
                                <tr>
                                    <td>Garage Size</td>
                                    <td><code>{{ $property->garage_size }}</code></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><code>{{ $property->address }}</code></td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td><code>{{ $property->city }}</code></td>
                                </tr>
                                <tr>
                                    <td>State</td>
                                    <td><code>{{ $property->state }}</code></td>
                                </tr>
                                <tr>
                                    <td>Postal Code</td>
                                    <td><code>{{ $property->postal_code }}</code></td>
                                </tr>
                                <tr>
                                    <td>Main Image</td>
                                    <td><img src="{{ asset($property->property_thumbnail) }}" style="width: 100px; height: 100px;"></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                    @if ($property->status == 1)
                                        <span class="rounded badge-pill bg-success">Active</span>
                                    @else
                                        <span class="rounded badge-pill bg-danger">InActive</span>
                                    @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Property Code</td>
                                    <td><code>{{ $property->property_code }}</code></td>
                                </tr>
                                <tr>
                                    <td>Property Size</td>
                                    <td><code>{{ $property->property_size }}</code></td>
                                </tr>
                                <tr>
                                    <td>Property Video</td>
                                    <td><code>{{ $property->property_video }}</code></td>
                                </tr>
                                <tr>
                                    <td>Neighborhood</td>
                                    <td><code>{{ $property->neighborhood }}</code></td>
                                </tr>
                                <tr>
                                    <td>Latitude</td>
                                    <td><code>{{ $property->latitude }}</code></td>
                                </tr>
                                <tr>
                                    <td>Longitude</td>
                                    <td><code>{{ $property->longitude }}</code></td>
                                </tr>
                                <tr>
                                    <td>Property Type</td>
                                    <td><code>{{ $property['type']['type_name'] }}</code></td>
                                </tr>
                                <tr>
                                    <td>Property Amenities</td>
                                    <td>
                                        <select name="amenities_id[]" class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
                                            @foreach ($amenities as $amenitie)
                                                <option value="{{ $amenitie->id }}" {{ (in_array($amenitie->id, $property_amnt) ? 'selected' : '') }}>{{ $amenitie->amenities_name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="margin-top: 10px"></div>
                        @if ($property->status == 1)
                        <form id="myForm" method="POST" action="{{ route('agent.inactive.property') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $property->id }}">
                            <button type="submit" class="btn btn-primary submit">InActive</button>
                        </form>
                        @else
                        <form id="myForm" method="POST" action="{{ route('agent.active.property') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $property->id }}">
                            <button type="submit" class="btn btn-primary submit">Active</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
