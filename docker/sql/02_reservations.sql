CREATE TABLE IF NOT EXISTS reservations (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        start_at DATETIME NOT NULL,
        end_at DATETIME NOT NULL,
        note TEXT NOT NULL,
        status VARCHAR(20) NOT NULL DEFAULT 'valid'
    ) DEFAULT CHARSET=utf8mb4
    COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS reservation_services (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    reservation_id INT UNSIGNED NOT NULL,
    service_id INT UNSIGNED NOT NULL,

    CONSTRAINT uq_reservation_service
        UNIQUE (reservation_id, service_id),

    CONSTRAINT fk_reservation_services_reservation
        FOREIGN KEY (reservation_id)
        REFERENCES reservations(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_reservation_services_service
        FOREIGN KEY (service_id)
        REFERENCES services(id)
        ON DELETE RESTRICT
    ) DEFAULT CHARSET=utf8mb4
    COLLATE=utf8mb4_unicode_ci;