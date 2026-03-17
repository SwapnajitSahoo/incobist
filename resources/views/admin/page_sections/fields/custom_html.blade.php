<div class="row g-3">
    <div class="col-12">
        <label class="form-label">HTML Content</label>
        <textarea name="content[html]" class="form-control" rows="10"
                  style="font-family:monospace;font-size:13px">{{ old('content.html', $data['html'] ?? '') }}</textarea>
    </div>
</div>