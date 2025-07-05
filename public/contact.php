<?php 
$rootDir = dirname(__DIR__);
$content = include $rootDir.'/config/contact-config.php';
ob_start();
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php include $rootDir.'/templates/head.php'; ?>

<body class="font-body bg-white text-gray-800 dark:bg-gray-900 dark:text-white">
    <?php include $rootDir.'/templates/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="relative pt-32 pb-24">
            <div class="absolute inset-0 overflow-hidden">
                <img src="/assets/img/contact-hero.jpg" alt="Students discussing with teacher"
                     class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gray-900 opacity-70"></div>
            </div>

            <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
                <span class="inline-flex dark:bg-gray-900/70 items-center px-4 py-2 rounded-full text-sm font-medium bg-white/90 text-blue-800 dark:bg-gray-800/90 dark:text-blue-200 backdrop-blur-sm">
                    Contact Us
                </span>
                <h1 class="text-4xl md:text-5xl font-bold mt-6 mb-6 font-heading text-white">
                    <?= $content['hero']['title'] ?>
                </h1>
                <p class="text-xl text-white/90 dark:text-gray-300 max-w-3xl mx-auto">
                    <?= $content['hero']['subtitle'] ?>
                </p>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-24 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12">
                <!-- Form Card -->
                <div class="bg-white dark:bg-gray-800 p-8 md:p-10 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700/50">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-100 dark:bg-blue-900/50 p-2 rounded-lg mr-4">
                            <?php include $rootDir."/templates/icons/message-text.svg"; ?>
                        </div>
                        <h2 class="text-3xl font-bold font-heading text-gray-900 dark:text-white">
                            <?= $content['form']['title'] ?>
                        </h2>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 mb-8">
                        <?= $content['form']['description'] ?>
                    </p>

                    <form class="space-y-6">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <?php foreach ($content['form']['fields'] as $field): ?>
                            <div class="form-group">
                                <label for="<?= $field['id'] ?>" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    <?= $field['label'] ?>
                                    <?php if ($field['required']): ?>
                                        <span class="text-red-500">*</span>
                                    <?php endif; ?>
                                </label>
                                <?php if ($field['type'] === 'textarea'): ?>
                                <textarea id="<?= $field['id'] ?>" name="<?= $field['name'] ?>" rows="5"
                                          class="w-full px-4 py-3 text-gray-800 dark:text-white border border-gray-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-transparent transition-all duration-300"
                                          <?= $field['required'] ? 'required' : '' ?>></textarea>
                                <?php else: ?>
                                <input type="<?= $field['type'] ?>" id="<?= $field['id'] ?>" name="<?= $field['name'] ?>"
                                       class="w-full px-4 py-3 text-gray-800 dark:text-white border border-gray-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-transparent transition-all duration-300"
                                       <?= $field['required'] ? 'required' : '' ?>>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="form-group">
                            <button type="submit"
                                    class="w-full px-6 py-4 bg-blue-400 hover:bg-blue-500 text-white font-medium rounded-lg transition-all duration-300 flex items-center justify-center gap-2 font-heading">
                                <?= $content['form']['submit_text'] ?>
                                <?php include $rootDir."/templates/icons/send.svg"; ?>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Info Card -->
                <div id="contact-form" class="bg-white dark:bg-gray-800 p-8 md:p-10 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700/50">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-100 dark:bg-blue-900/50 p-2 rounded-lg mr-4">
                            <?php include $rootDir."/templates/icons/info-circle.svg"; ?>
                        </div>
                        <h3 class="text-3xl font-bold font-heading text-gray-900 dark:text-white">
                            <?= $content['info']['title'] ?>
                        </h3>
                    </div>

                    <ul class="space-y-6 text-gray-700 dark:text-gray-300">
                        <!-- Location -->
                        <li class="flex items-start">
                            <div class="bg-blue-100 dark:bg-gray-700 p-3 rounded-lg mr-4">
                                <?php include $rootDir."/templates/icons/map-pin.svg"; ?>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Our Location</h4>
                                <p><?= $content['info']['address'] ?></p>
                            </div>
                        </li>

                        <!-- Phones -->
                        <li class="flex items-start">
                            <div class="bg-blue-100 dark:bg-gray-700 p-3 rounded-lg mr-4">
                                <?php include $rootDir."/templates/icons/phone.svg"; ?>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Call Us</h4>
                                <?php foreach ($content['info']['phones'] as $phone): ?>
                                <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="block hover:text-blue-500 transition-colors">
                                    <?= $phone ?>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </li>

                        <!-- Email -->
                        <li class="flex items-start">
                            <div class="bg-blue-100 dark:bg-gray-700 p-3 rounded-lg mr-4">
                                <?php include $rootDir."/templates/icons/mail.svg"; ?>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Email Us</h4>
                                <a href="mailto:<?= $content['info']['email'] ?>" class="hover:text-blue-500 transition-colors">
                                    <?= $content['info']['email'] ?>
                                </a>
                            </div>
                        </li>

                        <!-- Hours -->
                        <li class="flex items-start">
                            <div class="bg-blue-100 dark:bg-gray-700 p-3 rounded-lg mr-4">
                                <?php include $rootDir."/templates/icons/clock.svg"; ?>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Working Hours</h4>
                                <?php foreach ($content['info']['hours'] as $hours): ?>
                                <p><?= $hours ?></p>
                                <?php endforeach; ?>
                            </div>
                        </li>
                    </ul>

                    <!-- Social -->
                    <div class="mt-10 pt-6 border-t border-gray-200 dark:border-gray-700">
                        <h4 class="font-bold text-lg mb-4">Follow Us</h4>
                        <div class="flex gap-3">
                            <?php foreach ($content['info']['social'] as $social): ?>
                            <a href="<?= $social['url'] ?>" target="_blank"
                               class="w-12 h-12 flex items-center justify-center bg-white dark:bg-gray-700 rounded-xl shadow-sm text-gray-700 dark:text-gray-200 hover:bg-blue-100 dark:hover:bg-gray-600 transition-colors">
                                <?php include $rootDir."/templates/icons/{$social['icon']}.svg"; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhanced Map Section -->
        <section class="relative h-[500px] md:h-[600px] lg:h-[700px] bg-gray-100 dark:bg-gray-800 overflow-hidden">
            <!-- Map iframe with parallax effect -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15762.600944868756!2d38.77099794471845!3d9.004295156895298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b850d4bb1ac49%3A0xb0c90b76a68bbbd7!2zTG90dXMgQnVpbGRpbmcgMjIgfCAyMiB8IGhheWFodWxldCB8IOGIjuGJsOGItSDhiIXhipXhjYMgMjIgfCDhiIPhi6vhiIHhiIjhibU!5e0!3m2!1sen!2set!4v1751054316808!5m2!1sen!2set"
                class="absolute inset-0 w-full h-full scale-100 hover:scale-105 transition-transform duration-1000 ease-out"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

            <!-- Gradient overlay for better text contrast -->
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/30 to-transparent"></div>

            <!-- Text content container -->
            <div class="relative z-10 h-full flex items-end pb-16 md:pb-24 lg:pb-32 px-6">
                <div class="w-full max-w-4xl mx-auto">
                    <!-- Floating info card -->
                    <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 md:p-8 shadow-2xl backdrop-blur-sm bg-opacity-90 dark:bg-opacity-90 border border-gray-200 dark:border-gray-700">
                        <!-- Label with icon -->
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 dark:bg-blue-900/50 p-2 rounded-lg mr-3">
                                <?php include $rootDir."/templates/icons/map-pin.svg"; ?>
                            </div>
                            <span class="uppercase text-xs tracking-wider font-semibold text-blue-600 dark:text-blue-400">
                                Our Headquarters
                            </span>
                        </div>

                        <!-- Main headline -->
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold mb-3 text-gray-900 dark:text-white">
                            Visit Our Office in Addis Ababa
                        </h2>

                        <!-- Address with pin icon -->
                        <div class="flex items-start mb-5">
                            <div class="text-gray-500 dark:text-gray-400 mr-2 mt-1">
                                <?php include $rootDir."/templates/icons/location.svg"; ?>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300">
                                Lotus Building 22, Hayahulet, Bole Area<br>
                                Addis Ababa, Ethiopia
                            </p>
                        </div>

                        <!-- Action buttons -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <!-- Directions button -->
                            <a href="https://www.google.com/maps/search/?api=1&query=Lotus+Building+22,+Hayahulet,+Bole,+Addis+Ababa"
                              target="_blank"
                              class="flex-1 flex items-center justify-center px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-medium transition-all duration-300 shadow hover:shadow-lg">
                              <?php include $rootDir."/templates/icons/directions.svg"; ?>
                              <span class="ml-2">Get Directions</span>
                            </a>

                            <!-- Contact button -->
                            <a 
                                href="#contact-form" 
                                class="flex-1 flex items-center justify-center px-6 py-3 rounded-xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-800 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700 font-medium transition-all duration-300 shadow hover:shadow-lg"
                            >
                                <?php include $rootDir."/templates/icons/phone.svg"; ?>
                                <span class="ml-2">Contact Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Floating action button for mobile -->
            <div class="lg:hidden fixed bottom-6 right-6 z-20">
                <a 
                    href="https://maps.app.goo.gl/b4YF2fJxVExFbwmC8" 
                    target="_blank"
                    class="flex items-center justify-center w-14 h-14 rounded-full bg-blue-600 hover:bg-blue-700 text-white shadow-xl hover:shadow-2xl transition-all duration-300"
                >
                    <?php include $rootDir."/templates/icons/map.svg"; ?>
                </a>
            </div>
        </section>

    </main>

    <?php include $rootDir.'/templates/footer.php'; ?>

    <script src="/assets/js/theme-switcher.js" defer></script>
    <script src="/assets/js/mobile-menu.js" defer></script>
</body>
</html>
