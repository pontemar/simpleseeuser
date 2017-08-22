
plugin.tx_simpleseeuser_userlisting {
  view {
    templateRootPaths.0 = EXT:simpleseeuser/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_simpleseeuser_userlisting.view.templateRootPath}
    partialRootPaths.0 = EXT:simpleseeuser/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_simpleseeuser_userlisting.view.partialRootPath}
    layoutRootPaths.0 = EXT:simpleseeuser/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_simpleseeuser_userlisting.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_simpleseeuser_userlisting.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_simpleseeuser._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-simpleseeuser table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-simpleseeuser table th {
        font-weight:bold;
    }

    .tx-simpleseeuser table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
