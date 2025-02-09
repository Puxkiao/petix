    <x-app-layout>
    <div class="container my-5">
        <h2 class="mb-4">Add New Film</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        
            @csrf
            <div class="mb-3">
                <label for="judul_films" class="form-label">Judul Film</label>
                <input type="text" class="form-control @error('judul_films') is-invalid @enderror" id="judul_films" name="judul_films" value="{{ old('judul_films') }}">
                @error('judul_films')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="poster" class="form-label">Poster Film</label>
                <input type="file" class="form-control @error('poster') is-invalid @enderror" id="poster" name="poster">
                @error('poster')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add Film</button>
        </form>
    </div>
    </x-app-layout>