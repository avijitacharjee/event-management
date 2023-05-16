<div class="modal fade" id="addBlogModal" tabindex="-1" aria-labelledby="addContactlistModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addContactlistModalLabel">
                        Add New Blog post
                    </h5>
                    <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="uil uil-multiply"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="model-content main-form">
                        <div class="form-group mt-30">
                            <label class="form-label">Title*</label>
                            <input class="form-control h_40" type="text" placeholder="" name="title" required />
                        </div>
                        <div class="form-group mt-30">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" accept="image/*">
                        </div>
                        <div class="form-group mt-30">
                            <label class="form-label">Content*</label>
                            <div class="text-editor mt-4">
                                <textarea id="ld_editor" name="content" style="min-height: 400px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="main-btn min-width btn-hover h_40">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
