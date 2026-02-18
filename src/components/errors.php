                    <?php if (\MessageBag::get('error', false)) : ?>
                        <div class="border-1 text-red-400 p-3 rounded-sm my-4">
                        
                        <div class="mb-2">
                            <?= \MessageBag::get('message', '') ?>
                        </div>

                        <?php foreach(\MessageBag::get('message_details', []) as $detail) : ?>

                            <div class="mb-2">
                                <?= $detail ?>
                            </div>

                        <?php endforeach; ?>

                        </div>
                    <?php endif; ?>