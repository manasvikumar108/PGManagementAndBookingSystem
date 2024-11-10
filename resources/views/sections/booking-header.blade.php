<div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container" style="margin-top: 171px;">
        <div class="bg-white shadow" style="padding: 35px;">
            <h3>Book Your PG Rooms</h3>
            <form class="row g-2" method="post" action="{{ route('search') }}">
                @csrf
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-3">
                            <div class="date" id="date1" data-target-input="nearest">
                                <input name="check_in" type="text" placeholder="PG Booking Date" data-target="#date1"
                                       class="form-control datetimepicker-input @error('check_in') is-invalid @enderror"
                                       data-toggle="datetimepicker"
                                       value="{{ old('check_in', $fields['check_in'] ?? '') }}"/>
                                @error('check_in')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="date" id="date2" data-target-input="nearest">
                                <input name="check_out" type="text" placeholder="PG Leaving Date" data-target="#date2"
                                       class="form-control datetimepicker-input @error('check_out') is-invalid @enderror"
                                       data-toggle="datetimepicker"
                                       value="{{ old('check_out', $fields['check_out'] ?? '') }}"/>
                                @error('check_out')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select name="no_peron" class="form-select @error('no_peron') is-invalid @enderror">
                                <option value="">Seater</option>
                                @for ($i = 1; $i <= 4; $i++)
                                    <option @selected(old('no_peron', $fields['no_peron'] ?? '') == $i)
                                            value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
