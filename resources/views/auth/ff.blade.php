<!-- Cell Phone input -->
<div class="form-outline mb-4">
    <input type="text" id="cell_phone" name="cell_phone" class="form-control" />
    <label class="form-label" for="cell_phone">Cell Phone</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="password" name="password" class="form-control" />
    <label class="form-label" for="password">Password</label>
  </div>

  <div class="form-outline mb-4">
      <input type="password" id="password-confirm" class="form-control" name="password_confirmation"/>
      <label class="form-label" for="password-confirm">Password Confirm</label>
  </div>

  {{-- ----------------------- --}}
  <!-- Hotel Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="hotel_name" name="hotel_name" class="form-control" />
    <label class="form-label" for="hotel_name">Hotel Name</label>
  </div>

  <div class="form-outline mb-4">
      <input type="text" id="address" name="address" class="form-control" />
      <label class="form-label" for="address">Address</label>
  </div>

  <div class="form-outline mb-4">
    <select id="location" name="location" class="form-control">
      <option>Location</option>
      @foreach ($locations as $location)
          <option value={{$location->id}}>{{$location->city}}</option>
      @endforeach
      {{-- <option value="doict">Doict</option>
      <option value="government">Government</option>
      <option value="other">Other</option> --}}
    </select>
    <label class="form-label" for="location"></label>
  </div>
