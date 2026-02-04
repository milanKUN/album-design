<style>
	/* ---------- Gallery Grid ---------- */
	.milan_gall_container {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
		gap: 20px;
		margin-top: 30px;
	}

	.milan_gall_item {
		position: relative;
		overflow: hidden;
		border-radius: 14px;
		background: #fff;
		box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
		transition: all 0.35s ease;
	}

	.milan_gall_item:hover {
		transform: translateY(-6px);
		box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
	}

	.milan_gall_item img {
		width: 100%;
		height: 200px;
		object-fit: cover;
		transition: transform 0.4s ease;
	}

	.milan_gall_item:hover img {
		transform: scale(1.1);
	}

	/* ---------- Delete Button ---------- */
	.milan_gall_delete {
		position: absolute;
		top: 10px;
		right: 10px;
		background: linear-gradient(135deg, #ff4e4e, #ff0000);
		border: none;
		color: #fff;
		border-radius: 50%;
		width: 36px;
		height: 36px;
		cursor: pointer;
		font-size: 18px;
		display: flex;
		align-items: center;
		justify-content: center;
		transition: transform 0.25s ease, background 0.25s ease;
	}

	.milan_gall_delete:hover {
		background: linear-gradient(135deg, #ff0000, #c40000);
		transform: scale(1.15);
	}

	/* ---------- Upload Section ---------- */
	.upload-section {
		background: #fff;
		padding: 25px;
		border-radius: 12px;
		box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
	}

	.upload-section h3 {
		font-weight: 600;
		color: #222;
		margin-bottom: 20px;
		letter-spacing: 0.5px;
	}

	.form-label {
		font-weight: 500;
		color: #333;
	}

	/* ---------- File Input Style ---------- */
	.dsyle {
		background: #f7f8fa;
		border: 2px dashed #007bff;
		border-radius: 10px;
		padding: 12px;
		cursor: pointer;
		transition: 0.3s;
	}

	.dsyle:hover {
		background: #e9f3ff;
	}

	.dsyle::-webkit-file-upload-button {
		background: linear-gradient(135deg, #007bff, #0056b3);
		color: #fff;
		border: none;
		padding: 8px 15px;
		border-radius: 8px;
		cursor: pointer;
		font-weight: 500;
		transition: background 0.3s ease;
	}

	.dsyle::-webkit-file-upload-button:hover {
		background: linear-gradient(135deg, #0056b3, #003e8a);
	}

	/* ---------- Upload Button ---------- */
	.btn-primary {
		background: linear-gradient(135deg, #007bff, #0056b3);
		border: none;
		border-radius: 10px;
		padding: 10px 22px;
		font-weight: 500;
		letter-spacing: 0.4px;
		transition: all 0.3s ease;
	}

	.btn-primary:hover {
		background: linear-gradient(135deg, #0056b3, #003e8a);
		transform: translateY(-2px);
		box-shadow: 0 4px 10px rgba(0, 91, 230, 0.4);
	}

	/* ---------- Headings ---------- */
	h4 {
		font-weight: 600;
		color: #333;
		margin-top: 35px;
		margin-bottom: 15px;
	}

	/* ---------- Responsive ---------- */
	@media (max-width: 576px) {
		.milan_gall_item img {
			height: 160px;
		}
	}
</style>

<div class="container mt-4">

	<!-- Upload Section -->
	<div class="upload-section">
		<h3>Upload Images by Service</h3>

		<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
		<?php endif; ?>

		<form action="<?= base_url('admin/gallery/upload_images'); ?>" method="post" enctype="multipart/form-data">
			<!-- Service Dropdown -->
			<div class="mb-3">
				<label class="form-label">Select Service</label>
				<select name="service_id" class="form-control" id="service_id" required>
					<option value="">-- Choose Service --</option>
					<?php foreach ($services as $service): ?>
						<option value="<?= $service->id; ?>" <?= ($this->input->get('service_id') == $service->id) ? 'selected' : ''; ?>>
							<?= $service->service_title; ?>
						</option>
					<?php endforeach; ?>
				</select>
			</div>


			<!-- File Input -->
			<div class="mb-3">
				<label for="images" class="form-label">Select Multiple Images</label>
				<input type="file" name="images[]" id="images" multiple class="form-control dsyle" accept="image/*" required>
			</div>

			<button type="submit" class="btn btn-primary">Upload</button>
		</form>
	</div>

	<!-- Uploaded Images Section -->
	<h4>Uploaded Images</h4>
	<div class="milan_gall_container">
		<?php if (!empty($images)) { ?>
			<?php foreach ($images as $img) { ?>
				<div class="milan_gall_item" id="img_<?= $img->id; ?>">
					<img src="<?= base_url('uploads/gallery/' . $img->image); ?>" alt="Gallery Image">
					<button class="milan_gall_delete" onclick="deleteImage(<?= $img->id; ?>)">×</button>
				</div>
			<?php } ?>
		<?php } else { ?>
			<p>No images uploaded yet for this service.</p>
		<?php } ?>
	</div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
	// 🔹 Change Service — Reload Gallery for Selected Service
	$('#service_id').change(function() {
		let service_id = $(this).val();
		if (service_id) {
			window.location.href = '<?= base_url("admin/gallery?service_id="); ?>' + service_id;
		} else {
			window.location.href = '<?= base_url("admin/gallery"); ?>';
		}
	});

	// 🔹 Delete Image via AJAX
	function deleteImage(id) {
		if (confirm('Are you sure you want to delete this image?')) {
			$.ajax({
				url: '<?= base_url("admin/gallery/delete_image/"); ?>' + id,
				type: 'POST',
				dataType: 'json',
				success: function(response) {
					if (response.status) {
						$('#img_' + id).fadeOut(300, function() {
							$(this).remove();
						});
						alert('Image deleted successfully');
					} else {
						alert(response.message);
					}
				},
				error: function() {
					alert('Something went wrong, please try again.');
				}
			});
		}
	}
</script>
