# Greenter Changes

## Oct 2018-10-14 UBL 2.1

**Invoice**
- `TipoDeOperacion` es requerido, ahora se toma del catálogo 51.
- `Legends` ahora se toma del catálogo 52.
- Se agregó `TotalImpuestos` es requerido.
- Se agregó `ValorVenta` es requerido.
- Se agregó `MtoBaseIsc`.
- Se agrego `Cargos`.
- Se agrego `Descuentos`.

**Invoice Detail**
- Se agregó `TotalImpuestos` es requerido.
- Se agregó `MtoBaseIgv` es requerido. 
- Se agregó `PorcentajeIgv` es requerido.
- Se agregó `MtoBaseIsc`. 
- Se agregó `PorcentajeIsc`.
- Se agrego `Cargo`.
- Se agrego `Descuento`.

**Note**
- `TipoDeOperacion` es requerido, ahora se toma del catálogo 51.
- `Legends` ahora se toma del catálogo 52.
- Se agregó `TotalImpuestos` es requerido.
- Se agregó `MtoBaseIsc`.

**SalePerception**
- El codigo de régimen se toma del catálogo 53.
- Se agrego `porcentaje`.

**Charge** (Descuentos y Cargos)
- `codTipo` ver catálogo 53.

## Feb 2018-02-16
- Add notificator, notification, attachment files.
- Purpouse
    - Email
    - WebConsult