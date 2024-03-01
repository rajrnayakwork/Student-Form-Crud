<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="p-3 mb-2 bg-info text-info-emphasis">
    <form class="pt-5" method="POST" action="{{ route('update_student') }}">
        @csrf
        <input type="hidden" class="form-control" name="id" value="{{ $student->id }}">
        <div class="d-flex justify-content-center">
            <div class="card w-50 bg-info-subtle text-info-emphasis">
                <div class="card-header text-center">
                    <h2>Edit Student Form</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                            value="{{ $student->firstname }}">
                    </div>
                    @error('first_name')
                        <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                            value="{{ $student->lastname }}">
                    </div>
                    @error('last_name')
                        <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age"
                            value="{{ $student->age }}">
                    </div>
                    @error('age')
                        <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label><br>
                        <input type="radio" class="btn-check" name="gender" id="male" value="1"
                            autocomplete="off" @if ($student->gender == '1') checked @endif>
                        <label class="btn" for="male">Male</label>

                        <input type="radio" class="btn-check" name="gender" id="female" value="2"
                            autocomplete="off" @if ($student->gender == '2') checked @endif>
                        <label class="btn" for="female">Female</label>

                        <input type="radio" class="btn-check" name="gender" id="other" value="3"
                            autocomplete="off"@if ($student->gender == '3') checked @endif>
                        <label class="btn" for="other">Other</label>
                    </div>
                    @error('gender')
                        <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                            {{ $message }}
                        </div>
                    @enderror
                    {{-- <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" role="switch" id="gujarati">
                            <label class="form-check-label" for="gujarati">Gujarati</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" role="switch" id="hindi">
                            <label class="form-check-label" for="hindi">Hindi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" role="switch" id="english">
                            <label class="form-check-label" for="english">English</label>
                        </div>
                    </div> --}}
                    <div class="mb-3">
                        <label for="last_name" class="form-label">City</label><br>
                        <select class="form-select" style="width: 20%" name="city">
                            <option selected disabled>Select Any City</option>
                            <option value="ahmedabad" @if ($student->city == 'ahmedabad') selected @endif>Ahmedabad
                            </option>
                            <option value="kalol" @if ($student->city == 'kalol') selected @endif>Kalol</option>
                            <option value="rajkot" @if ($student->city == 'rajkot') selected @endif>Rajkot</option>
                        </select>
                    </div>
                    @error('city')
                        <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <a href="{{ route('view_student') }}"><button type="button"
                            class="btn btn-outline-secondary">Cancel</button></a>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
