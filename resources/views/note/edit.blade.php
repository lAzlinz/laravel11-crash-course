<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Note: {{ $note->created_at }} [Edit]</h1>
        <form action={{ route('note.update', $note) }} method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here...">{{ $note->note }}</textarea>
            <div class="note-buttons">
                <a href={{ URL::previous() }} class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
