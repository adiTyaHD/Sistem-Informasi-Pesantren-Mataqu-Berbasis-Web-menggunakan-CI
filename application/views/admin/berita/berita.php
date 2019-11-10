                <?= form_open_multipart('admin/berita') ?>

                <div class="card-body">
                    <div class="container">

                        <div class="card">
                            <div class="card-header">
                                <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>


                                <div class="form-group">
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="masukan judul">
                                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                        <label class="custom-file-label" for="gambar">pilih gambar content</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-12">
                                <label for="kategori"></label>
                                <select name="kategori" class="form-control" id="kategori">
                                    <option value="">pilih kategori berita ... </option>
                                    <option value="1">mataqu news</option>
                                    <option value="2">setoran hafalan</option>
                                    <option value="3">panduan hafalan</option>
                                    <option value="4">wakaf & donasi</option>
                                </select>
                            </div>
                            <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea name="berita" id="berita" cols="30" rows="10"></textarea>
                            </div>

                        </div>
                        <?= form_error('berita', '<small class="text-danger pl-3">', '</small>'); ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-danger mt-3">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                </div>