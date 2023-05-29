<?php
require_once __DIR__ . '/../base/header.php';

/** @var string $title */
/** @var array $invoices */
?>
    <h1><?= $title; ?></h1>
    <a class="btn btn-primary" href="/invoices/new" role="button" aria-disabled="true">New Invoice</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Number</th>
            <th scope="col">To</th>
            <th scope="col">Date</th>
            <th scope="col">Due Date</th>
            <th scope="col">Paid</th>
            <th scope="col">Due Paid</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        <?php if (empty($invoices)): ?>
            <tr>
                <td colspan="7">
                    There are no invoices.
                </td>
            </tr>
        <?php else: ?>
            <?php foreach ($invoices as $invoice): ?>
                <tr>
                    <th scope="row"><a href="/invoices/view?id=<?= $invoice['invoice_id']; ?>"><?= $invoice['invoice_number']; ?></a></th>
                    <td><?= $invoice['invoice_to']; ?></td>
                    <td><?= $invoice['date']; ?></td>
                    <td><?= $invoice['due_date']; ?></td>
                    <td><?= $invoice['paid']; ?></td>
                    <td><?= $invoice['due_paid']; ?></td>
                    <td>
                        <?php if ($invoice['status'] === 'awaiting_payment'): ?>
                            <span class="badge text-bg-primary">Awaiting Payment</span>
                            <a href="/invoices/payment/add?invoice_id=<?= $invoice['invoice_id']; ?>">Add Payment</a>
                        <?php elseif ($invoice['status'] === 'paid'): ?>
                            <span class="badge text-bg-success">Paid</span>
                        <?php endif;?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
<?php require_once __DIR__ . '/../base/footer.php'; ?>


<!--insert into magemastery_invoice-->
<!--(invoice_number, invoice_to, date, due_date, paid, subtotal, total, currency, status)-->
<!--values('001', 'Mage Mastery Inc.', '10 Apr, 2023', '1 May, 2023', '200.00', '200.00', '200.00', 'USD', 'paid');-->

<!--use invoice_system_db;-->
<!---->
<!--CREATE TABLE `invoice_system_db` (-->
<!--`invoice_id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,-->
<!--`invoice_number` VARCHAR(255) NOT NULL,-->
<!--`invoice_to` VARCHAR(255) NOT NULL,-->
<!--`date` VARCHAR(255) NOT NULL,-->
<!--`due_date` VARCHAR(255) NOT NULL,-->
<!--`paid` DECIMAL(8,2) DEFAULT 0.00,-->
<!--`due_paid` DECIMAL(8,2) DEFAULT 0.00,-->
<!--`subtotal` DECIMAL(8,2) DEFAULT 0.00,-->
<!--`total` DECIMAL(8,2) DEFAULT 0.00,-->
<!--`currency` VARCHAR(3) NOT NULL,-->
<!--`status` VARCHAR(50) NOT NULL,-->
<!--`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,-->
<!--`updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP-->
<!--);-->
