@extends('admin.template')
@section('title')
    Google Map
@endsection

@section('content')
<div class="mt-3"></div>
<div class="container mt-4 mx-4">
    <form id="mapForm" method="POST" action="{{ route('iframe.update') }}">
        @csrf
        @method('PUT')
        <div class="mb-3 me-3 mr-3 mx-4">
            <label for="iframe" class="form-label">
                <h3 class="fw-3">Share Embed a Map</h3>
            </label>
            <textarea name="iframe" class="form-control  @error('iframe') is-invalid @else is-valid @enderror" id="iframe" rows="5" placeholder="Paste your embed iframe code here">{!! $iframe->iframe !!}</textarea>
            <button type="submit" class="btn btn-success mt-3">Submit</button>
        </div>
    </form>

    <div class="mt-4">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <iframe id="mapDisplay" src="" frameborder="0" style="width: 100%; height: 450px; border: 0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    // Function to update the map in real-time when textarea content changes
    function updateMap() {
        const iframeCode = document.getElementById('iframe').value; // Get iframe code from textarea
        const mapDisplay = document.getElementById('mapDisplay'); // Get iframe in card body

        // Extract the `src` URL from the iframe code using regex
        const srcMatch = iframeCode.match(/src="([^"]+)"/);
        if (srcMatch && srcMatch[1]) {
            mapDisplay.src = srcMatch[1]; // Set the src of the mapDisplay iframe
        } else {
            mapDisplay.src = ''; // Clear the iframe if the input is invalid
        }
    }

    // Trigger the updateMap function when the page loads if iframe content already exists
    window.onload = function() {
        const iframeCode = document.getElementById('iframe').value; // Get iframe code from textarea
        const mapDisplay = document.getElementById('mapDisplay'); // Get iframe in card body

        // Extract the `src` URL from the iframe code using regex
        const srcMatch = iframeCode.match(/src="([^"]+)"/);
        if (srcMatch && srcMatch[1]) {
            mapDisplay.src = srcMatch[1]; // Set the src of the mapDisplay iframe
        }
    }

    // Listen for changes in the iframe textarea to update the map in real-time
    document.getElementById('iframe').addEventListener('input', updateMap);
</script>
@endsection
@endsection
