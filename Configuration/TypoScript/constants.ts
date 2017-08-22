
plugin.tx_simpleseeuser_userlisting {
  view {
    # cat=plugin.tx_simpleseeuser_userlisting/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:simpleseeuser/Resources/Private/Templates/
    # cat=plugin.tx_simpleseeuser_userlisting/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:simpleseeuser/Resources/Private/Partials/
    # cat=plugin.tx_simpleseeuser_userlisting/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:simpleseeuser/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_simpleseeuser_userlisting//a; type=string; label=Default storage PID
    storagePid =
  }
}
